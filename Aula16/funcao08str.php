<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = "Eu vou estudar php agora";
        $cont = str_word_count($frase, 2);
        print_r($cont);
    ?>
    <h1>FUNCAO EXPLOITE</h1>
    <?php
        $site = "Curso em video";
        $vetor = explode(" ", $site);
        print_r($vetor);
    ?>6
</body>
</html>