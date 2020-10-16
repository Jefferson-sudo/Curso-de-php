<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $ano = isset($_GET["ano"])?$_GET["ano"]:"Ano não informado";
    $idade = date("Y") - $ano;

  if ($idade == 0){
        echo "Ele(a) ainda não completou 1 ano";
    }else if($idade == 1){
        echo "Voce tem 1 ano de idade";
    }else if($idade > 1){
        echo "Voce tem ".$idade." anos de idade";
    }//visto ate 16
?>
<html><br><br></html>
<?php
    if($idade <16){
        echo"Não voto  ";
    }else{
        if($idade >=16 && $idade <18){
            echo"Voto não obrigatorio";
        }else{
            echo"Voto obrigatorio";
        }
    }
?>