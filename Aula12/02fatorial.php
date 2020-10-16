<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $v = $_GET["val"];
        echo "<h1>Caculando o fatorial de $v</h1>";
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c --;
            echo $v.".".$c."! ";
        }while($c >= 1);
        echo "<h2>$v! = $fat</h2>";
    ?>
    <a href="02index.html">Volar</a>
</body>
</html>