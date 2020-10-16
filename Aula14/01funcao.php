<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
        //funcao para somar dois números
        function soma($a, $b){
            $s =$a + $b;
            echo "<p>A soma vale $s</p>";
        }

        soma(15,9);

    ?>
</body>
</html>