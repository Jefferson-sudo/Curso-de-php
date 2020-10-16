<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo"A raiz quadrada de $valor é ".number_format($rq,2);// 12:52... continua
?><a href="01formulario.html">  Voltar</a>
</body>
</html>

