<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = $_GET["num"];
        $o = $_GET["oper"];        

        switch ($o) {
            case 1:
                $r = $n * 2;
            break;
            case 2:
                $r = $n * 3;
            break;
            case 3:
                $r = sqrt($n);
        }
        echo "Resultado é $r";
       
?>
 <a href="exercicio01.html">Voltar</a>
</body>
</html>