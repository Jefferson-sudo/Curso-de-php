<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilopara02exercicios.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do usuario</title>
</head>
<body>
<?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO!]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
    $idade = date("Y") - $ano;
    
?>
<form>
    <fieldset><legend>Informações do usuario</legend>
    <a href="02exercicios.html">Voltar</a>
        <?php 
            echo "Nome: $nome";
            $r = ($idade > 120)?"Idade: [Não informado]":"Idade: $idade";
            echo"<br/>$r";
            echo"<br/>Ano de nacimento: $ano";
            echo"<br/>  Sexo: $sexo";
        ?>
    </form>
</body>
</html>