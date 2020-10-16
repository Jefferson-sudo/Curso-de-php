<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Seu nome ao contrario é </h2>

    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado";
        $stringlower = strrev(ucfirst($nome));
        echo ">$stringlower"
        ?>
        <a href="javascript:history.back()">Voltar</a>

</body>
</html>