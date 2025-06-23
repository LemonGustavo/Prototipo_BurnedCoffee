// Espera o conteúdo da página carregar
window.onload = function() {
    // Esconde a tela de splash após 2 segundos
    setTimeout(function() {
        document.getElementById('splash').style.display = 'none';
        document.getElementById('conteudo-principal').style.display = 'block';
    }, 2000); // 2000 milissegundos = 2 segundos
};