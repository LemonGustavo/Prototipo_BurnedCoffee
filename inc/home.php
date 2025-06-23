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
    <link rel="stylesheet" href="homestyle.css">
    <title>Home</title>
</head>
<body>
    <?php include 'splash.php'; ?>

  <div id="conteudo-principal" style="display:none; background-color: blue;">
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
    </div>
    </div> <!--fim da barra azul -->
    <div id="segundo-conteudo container_2">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
        <hr class="border border-primary border-3 opacity-75">
          <div class="card"> <!--card principal -->
            <a href="unidade.php" style="text-decoration: none;">
            <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 01</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">45% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 45%;"></div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            </a>
            <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 02</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">20% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 20%;"></div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 03</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 04</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 05</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 06</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 07</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 08</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 09</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
              <div class="card-content">
              <div class="row">
                <div class="col-4">
                  <h2 class="card-title">Unidade 10</h2>
                </div>
                <div class="col-8">
                  <p class="card-text d-flex justify-content-end">0% completo</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 0%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
          </div> <!-- fim do card -->
        </div> <!-- fim do col-8-->
        <div class="col-1"></div>
      </div>
    </div>
    </div> <!-- fim do conteúdo principal-->
    <div>
      <p></p>
    </div> <!-- Div apenas para separar o footer -->
    <footer class="footer mt-auto py-3" style="background-color: rgb(12, 32, 97);">  <div class="container text-center">
            <span style="color: white;">Projeto Burned Coffee - 3° A Informática</span>
        </div>
</footer>
    <script src="script.js"></script>
</body>
</html>