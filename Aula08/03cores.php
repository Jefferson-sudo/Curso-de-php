<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <?php
        $txt = isset($_GET["t"])? $_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])? $_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])? $_GET["cor"]: "FFF";    
        ?>
    <link rel="stylesheet" href="03cores.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cor</title>
    <style>
        span.texto{
            font-size:<?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
   <div>
        <?php
            echo "<span class='texto'>$txt</span>" ;
        ?>
   </div>
</body>
</html>