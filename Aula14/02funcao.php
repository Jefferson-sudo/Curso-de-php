<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcao que retorna inteiro</title>
</head>
<body>
    <?php//funcao que retorna um valor inteiro
        function soma ($a, $b){
            $s = $a + $b;
            return $s;
        }

        $x = 3;
        $y = 4;
        // chamada a funcao passando x e y como parametros
        $res  = soma ($x, $y);

        echo"A soma entre $x e $y é $res";
    ?>
</body>
</html>