<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css/">
    <title>Operações Aritmeticas</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            echo "<h2>Valores recebidos: $n1 e $n2<h2/>"
            echo "n1 vale $n1 <br/>n2 vale $n2";
            echo"<br/>A soma entre eles vale ".($n1 + $n2);
            echo"<br/> A subtração vale ".($n1 - $n2);
            echo"<br/> A multiplicação vale ".($n1 * $n2);
            echo"<br/> A divisão vale ".($n1 / $n2);
            echo"<br/> O modulo vale ".($n1 % $n2);
            echo"<br/> A media vale $m";
        ?>
    </div>
</body>
</html>