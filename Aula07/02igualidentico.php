<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador indêntico</title>
</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)?"SIM":"NÃO";
        echo "As variaveis A e B: $r são identicas";
    ?>
</body>
</html>