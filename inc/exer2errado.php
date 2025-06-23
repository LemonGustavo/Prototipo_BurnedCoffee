<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=MuseoModerno:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="conceito.css">
    <title>Exercícios</title>
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
</div> <!--Fim da barra azul-->

<div id="segundo-conteudo container_2">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="col-4 d-flex justify-content-start">
                        <div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Desistir do exercício
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Você tem certeza?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Desistir do exercício fará com que ele não seja salvo como completo!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar</button>
        <a href="unidade.php" class="btn btn-danger" style="background-color: red;">Desistir</a>
      </div>
    </div>
  </div>
</div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 d-flex">
                            <div class="card" style="background-color: #1F3A93;">
                                <div class="card-body">
                                    <img class="mb-2" src="../img/decoracao_exer.png" style="width: 100%;">
                                    <h2 style="color: white; text-align: center; font-size: 50px;">O que é um "array" em progamação?</h2>
                                    <div class="row">
                                        <div class="col-6"></div>
                                        <div class="col-6"><img style="width: 150px;" src="../img/estrela2.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2" style="text-align: center; margin: none; background-color: red; color: white; font-size: 24px;">
                                <div class="card-body">
                                    <p>Um tipo de dado que armazena um único valor</p>
                                </div>
                            </div>
                            <div class="card mb-2" style="text-align: center; margin: none; background-color: red; color: white; font-size: 24px;">
                                <div class="card-body">
                                    <p>Uma estrutura condicional</p>
                                </div>
                            </div>
                            <div class="card mb-2" style="text-align: center; margin: none; background-color: #1F3A93; color: white; font-size: 24px;">
                                <div class="card-body">
                                    <p>Uma estrutura de dados que armazena múltiplos valores</p>
                                </div>
                            </div>
                            <div class="card mb-2" style="text-align: center; margin: none; background-color: red; color: white; font-size: 24px;">
                                <div class="card-body">
                                    <p>Um operador aritimético</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9"></div>
                        <div class="col-3 d-flex justify-content-end">
                        <a href="exerResul.php" class="btn btn-light" style="background-color: #97a5cd;">Finalizar exercício</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div> <!-- Fim do contéudo principal-->

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