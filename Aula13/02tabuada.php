<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_GET["num"];
        for ($i = 1; $i <= 10; $i++){
            $result = $num * $i;
            echo "$i X $num = $result<br/>";
        }
    ?>
    <a href="javascript:history.go(-1)">Volar</a><!--Volar uma pagina-->
</body>
</html>