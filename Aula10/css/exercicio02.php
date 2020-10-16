<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias da semana</title>
</head>
<body>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch($d) {
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Levanta, hoje é dia de ir pra escola! ";
                break;

            case 7:
            case 8:
                echo "Eba, hoje não precisa ir pra escola! ;)";
                break;
            default:
            echo"Dia da semana inválido";
        }

    ?>
    <br><a href="javascript:history.go(-1)">Volar</a>
</body>
</html>