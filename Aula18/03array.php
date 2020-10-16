<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <pre>
    <table border="1"><tr>
    <?php
        $c = range(5,20,2);//Vai de 5 até 20 pulando de 2 em 2
        foreach($c as $valor){//serve para percorrer o vetor e imprimir os valores que no vaso serão tratados como $valor
            echo "<td>$valor</td> ";
        }
    ?>
    </tr></table>
    </pre>
</body>
</html>