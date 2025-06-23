<?php require 'funcoes.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=MuseoModerno:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="perfilstyle.css">
    <title>Página de Perfil</title>
</head>
<body>

  <div id="conteudo-principal" style="background-color: blue;">
    <div class="container">
      <div class="row">
      <div class="col-2">
        <div id="barra-lateral" class="fechada">
          <div class="barra-unidades mt-5">
            <a href="home.php"><img src="../img/livro.png" class="imagens-barra"></a>
            <a href="home.php"><h2>Unidades</h2></a>
          </div>
          <div class="barra-unidades mt-3">
            <a href="perfil.php"><img src="../img/jornal.png" class="imagens-barra"></a>
            <a href="perfil.php"><h2>Perfil</h2></a>
          </div>
          <div class="barra-unidades mt-3">
            <a href="#"><img src="../img/atendimento.png" class="imagens-barra"></a>
            <a href="#"><h2>Contato</h2></a>
          </div>
          <div class="barra-unidades mt-3">
            <a href="#"><img src="../img/cadeado.png" class="imagens-barra"></a>
            <a href="#"><h2>Política de Privacidade</h2></a>
          </div>
        </div>
      </div>
      <div class="barra-azul col-10"> <div id="conteudo" style="width: 300;">
        <div class="imagens-canto">
          <img src="../img/Notification.png" alt="Notificação">
          <img src="../img/Waluigi.png" alt="Waluigi">
        </div>
      </div>
    </div>
  </div>

<div id="botao-menu" class="mb-5">
  <span>&#9776;</span>
</div>

    </div>
    </div> <!--fim da barra azul -->
    <div id="segundo-conteudo container_2">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10 mt-3">
            <div class="card">
                <div class="card-content">
                    <h2>Sua Conta</h2>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
      </div>
      
      <div class="row mt-2">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Foto de perfil</h3>
                        <img src="../img/Waluigi.png" style="width: 110px;">
                        <div class="d-grid gap-2 d-md-block mt-1">
                            <button class="btn btn-primary" type="button">Alterar</button>
                            <button class="btn btn-danger" type="button">Remover</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Nome e E-mail</h3>
                        <div class="mb-2">
                            <label for="name" class="form-label">Nome:</label>
                            <div class="p-2 bg-primary bg-opacity-10 border border-primary rounded" style="height: 40px;">
                                <span id="name"><?php echo $_SESSION['nome']; ?></span>
                                <a href="#" class="ms-2"><img src="../img/editar.png" style="width: 20px;"></a>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="form-label">E-mail:</label>
                            <div class="p-2 bg-primary bg-opacity-10 border border-primary rounded" style="height: 40px;">
                                <span id="email"><?php echo $_SESSION['us']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

      <div class="row mt-2">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
            <h3>Informações Pessoais</h3>
            <p>
    <?php
    $log = fopen('log_usuarios.txt', 'r');
    if ($log) {
        // Encontra a linha de log mais recente para o usuário atual
        $linha_usuario = null;
        while (($linha = fgets($log)) !== false) {
            if (strpos($linha, $_SESSION['nome']) !== false) {
                $linha_usuario = $linha;
            }
        }
        fclose($log);

        // Exibe a linha de log do usuário ou mensagem padrão
        if ($linha_usuario) {
            echo $linha_usuario;
        } else {
            echo "Nenhum registro encontrado para este usuário.";
        }
    } else {
        echo "Erro ao abrir o arquivo de log.";
    }
    ?>
</p>
            <p>Completou um total de xx conceitos</p>
            <p>Completou um total de xx atividades</p>
            <p>Completou um total de xx desafios</p>
            </div>
        </div>
        <div class="col-1"></div>
      </div>

      <div class="row mt-2">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
            <h3>Senha</h3>
            <p>Sua última mudança de senha foi em dd/mm/yy</p>
                <div class="d-flex col-6 justify-content-start">
                    <button class="btn btn-primary mt-2 w-50" type="button">Alterar</button>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
      </div>
      
      <div class="row mt-2 mb-3">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
            <h3>Desconectar</h3>
                <a href="index.php">
                <div class="d-flex col-6 justify-content-start">
                    <button class="btn btn-primary mt-2 w-50" type="button">Sair da minha conta</button>
                </div>
                </a>
                <div class="d-flex col-6 justify-content-start">
                    <button class="btn btn-danger mt-2 w-50" type="button">Excluir minha conta</button>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
      </div>
    </div> <!-- fim do conteúdo principal-->
    <div>
      <p></p>
    </div> <!-- Div apenas para separar o footer -->
    <footer class="footer mt-auto py-3" style="background-color: rgb(12, 32, 97);">  <div class="container text-center">
            <span style="color: white;">Projeto Burned Coffee - 3° A Informática</span>
        </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const barraLateral = document.getElementById('barra-lateral');
  const conteudo = document.getElementById('conteudo');
  const botaoMenu = document.getElementById('botao-menu');

  // Fecha a barra lateral e ajusta o conteúdo ao carregar a página
  barraLateral.classList.add('fechada');
  conteudo.classList.add('fechado');
  botaoMenu.classList.add('fechado');

  // Adiciona o evento de clique no botão
  botaoMenu.addEventListener('click', () => {
    barraLateral.classList.toggle('fechada');
    conteudo.classList.toggle('fechado');
    botaoMenu.classList.toggle('fechado');
  });
});
</script>
</body>
</html>