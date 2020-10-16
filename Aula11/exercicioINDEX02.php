<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form method="get" action="exercicio02.php">
        <?php
            $c = 1;
            while($c <= 5{ 
                echo "Valor 1: <input type='number' name='$c' max='100' min='0' value='0'/> <br/>";
                $c++;
            }
        ?><input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>