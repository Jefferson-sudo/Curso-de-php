<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
    <?php
        $c = 10;
        do{
            echo "$c. ";
            $c-=1;
        }while($c >= 0);
    ?>
</body>
</html>