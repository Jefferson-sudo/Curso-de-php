<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor heterogenio</title>
</head>
<body>
    <?php
        $v = array ("nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
        foreach($v as $campo_informacao => $informacao){
            echo"$campo_informacao = $informacao </br>";//foreach para imprimir o vetor na tela
        }
    ?>
</body>
</html>