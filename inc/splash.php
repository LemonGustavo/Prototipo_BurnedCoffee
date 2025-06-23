<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .splash {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #3498db;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 2em;
    z-index: 1000;
    }
    </style>
</head>
<body>
</body>
</html>

<?php
// Simula um tempo de carregamento
sleep(0); // 2 segundos de delay

// Exibe a tela de splash
echo '<div id="splash">
<img class="splash" src="../img/abertura.jpg">
</div>';
?>