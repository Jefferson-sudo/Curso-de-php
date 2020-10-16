<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function teste(&$x){//Parâmetro por referencia
            $x+=2;
            echo "O valor de X é $x</br>";
        }
        $a = 3;
        teste($a);
        echo"O valor de A é $a";
    ?>
</body>
</html>