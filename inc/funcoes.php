<?php
session_start();
function conecta() {
    $pdo = new PDO('mysql:dbname=burnedcoffee;port=3307', 'root', '');
    $pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
date_default_timezone_set('America/Campo_Grande');
function cadastrar_usuario($nome, $email, $senha) {
    try {
        $pdo = conecta();
        $query = $pdo->prepare('INSERT INTO usuario(nomusu, email, senha) VALUES (:n, :e, :s)');
        $query->bindvalue(':n', $nome);
        $query->bindvalue(':e', $email);
        $query->bindvalue(':s', $senha);
        $query->execute();

        $data_hora = date('d/m/Y H:i:s');
        $log = fopen('log_usuarios.txt', 'a');
        if ($log) {
            fwrite($log, "Usuário $nome cadastrado em: $data_hora\n");
            fclose($log);
        } else {
            error_log("Erro ao abrir arquivo de log para escrita.");
        }
        header('Location: login.php');
    } catch (Exception $e) {
        error_log("Erro durante o cadastro do usuário: " . $e->getMessage());
    }
}

function logar($email, $senha) {
    $pdo = conecta();
    $query = $pdo->prepare('SELECT * FROM usuario WHERE email = :x AND senha = :y');
    $query->bindvalue(':x', $email);
    $query->bindvalue(':y', $senha);
    $query->execute();

    if ($query->rowcount() <= 0) {
        return '! | Falha ao logar!';
    } else {
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        if ($usuario && isset($usuario['nomusu'])) {  // <--- Verificação crucial
            $_SESSION['us'] = $usuario['email'];
            $_SESSION['id'] = $usuario['idusu'];
            $_SESSION['nome'] = $usuario['nomusu'];
            header('Location: home.php');
            exit();
        } else {
            // Log do erro para depuração
            error_log("Erro: Usuário encontrado, mas 'nomusu' 
            não definido ou usuário não encontrado. Email: " . $email);
            return '! | Falha ao logar! (Erro interno)'; // Mensagem de erro genérica para o usuário
        }
    }
}

?>