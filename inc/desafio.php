<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=MuseoModerno:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="conceito.css">
    <title>Desafio</title>
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
  Desistir do desafio
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
        Desistir do desafio fará com que ele não seja salvo como completo!
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
                        <div class="col-5"><img src="../img/cubo.png" style="width: 100%"></div>
                        <div class="col-6">
                            <div class="card" style="margin: none; background-color: white;">
                                <div class="card-body">
                                    <h1>Desafio</h1><br>
                                    <div class="text-justify"> Crie uma classe chamada HeartRates.
                                    Os atributos da classe devem incluir o nome, sobrenome e data de nascimento da pessoa (consistindo em atributos separados para mês, dia e ano de nascimento).</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Revelar resposta
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Possível Resolução</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text">
        <p>// Classe HeartRates</p>
<p>public class HeartRates {</p>
<p>    private String nome;</p>
<p>    private String sobrenome;</p>
<p>    private int mesNascimento;</p>
<p>    private int diaNascimento;</p>
<p>    private int anoNascimento;</p>
<p>    // Construtor da classe</p>
<p>    public HeartRates(String nome, String sobrenome, int mes, int dia, int ano) {</p>
<p>        this.nome = nome;</p>
<p>        this.sobrenome = sobrenome;</p>
<p>        this.mesNascimento = mes;</p>
<p>        this.diaNascimento = dia;</p>
<p>        this.anoNascimento = ano;</p>
<p>    }</p>
<p>    // Métodos getters para acessar os atributos</p>
<p>    public String getNome() {</p>
<p>        return nome;</p>
<p>    }</p>
<p>    public String getSobrenome() {</p>
<p>        return sobrenome;</p>
<p>    }</p>
<p>    public int getMesNascimento() {</p>
<p>        return mesNascimento;</p>
<p>    }</p>
<p>    public int getDiaNascimento() {</p>
<p>        return diaNascimento;</p>
<p>    }</p>
<p>    public int getAnoNascimento() {</p>
<p>        return anoNascimento;</p>
<p>    }</p>
<p>    // Método para calcular a idade da pessoa</p>
<p>    public int calcularIdade(int anoAtual) {</p>
<p>        return anoAtual - anoNascimento;</p>
<p>    }</p>
<p>    // Método para calcular a frequência cardíaca máxima</p>
<p>    public int calcularFrequenciaMaxima() {</p>
<p>        return 220 - calcularIdade(2024); // Considerando o ano atual como 2024</p>
<p>    }</p>
<p>    // Método para calcular a faixa de frequência cardíaca alvo (50% a 85% da frequência máxima)</p>
<p>    public void calcularFrequenciaAlvo() {</p>
<p>        int frequenciaMaxima = calcularFrequenciaMaxima();</p>
<p>        double minimo = frequenciaMaxima * 0.5;</p>
<p>        double maximo = frequenciaMaxima * 0.85;</p>
<p>        System.out.println("Frequência cardíaca alvo: " + (int) minimo + " - " + (int) maximo + " bpm");</p>
<p>    }</p>
<p>    // Método para exibir as informações da pessoa</p>
<p>    public void exibirInformacoes() {</p>
<p>        System.out.println("Nome: " + nome + " " + sobrenome);</p>
<p>        System.out.println("Data de nascimento: " + diaNascimento + "/" + mesNascimento + "/" + anoNascimento);</p>
<p>        System.out.println("Idade: " + calcularIdade(2024) + " anos");</p>
<p>        System.out.println("Frequência cardíaca máxima: " + calcularFrequenciaMaxima() + " bpm");</p>
<p>        calcularFrequenciaAlvo();</p>
<p>    }</p>
<p>    // Método principal para testar a classe</p>
<p>    public static void main(String[] args) {</p>
<p>        // Criando um objeto da classe HeartRates</p>
<p>        HeartRates pessoa = new HeartRates("João", "Silva", 5, 15, 1990);</p>
<p>        // Chamando o método para exibir as informações</p>
<p>        pessoa.exibirInformacoes();</p>
<p>    }</p>
<p>}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>

                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9"></div>
                        <div class="col-3 d-flex justify-content-end">
                        <a href="unidade.php" class="btn btn-light" style="background-color: #97a5cd;">Desafio completo</a>
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