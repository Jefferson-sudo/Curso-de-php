<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos sobre incrementos</title>
</head>
<body>
    <?php
        $ano_atual = $_GET["anoAtual"];
        echo"O ano anterior a $ano_atual é ".--$ano_atual; //exemplo de pre incremento

   
    ?>
</body>
</html>