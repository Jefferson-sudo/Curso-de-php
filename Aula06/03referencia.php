<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos sobre refencias</title>
</head>
<style>
    h2{
        font-family:ubuntu;
        color:blue;
    }
</style>
<body>
    <?php
        $a = 3;
        $b = $a;
        $b +=5;
        echo"A variavel A vale $a";
        echo"<br/>A variavel B vale $b";
        
        echo"<br/><h2>2 exemplo<br/></h2>";
        $c = 3;
        $d = &$c;
        $d += 0;
        echo"C vale $c";
        echo"<br/> D vale $d";
       
    ?>
</body>
</html>