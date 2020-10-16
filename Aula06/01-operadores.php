<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de operadores de atribuição</title>
</head>
<body>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ".number_format($preco,2);
    $preco += ($preco * 10/100);
    echo"<br/>O novo preço com aumento de 10% sera de R$".number_format($preco,2);
    $preco_desconto = $preco - ($preco * 5 /100);
    echo"<br/><br/> Com o desconto de 5% do cupom que você adiquiriu fica por R$".number_format($preco_desconto,2);

    ?>
</body>
</html>