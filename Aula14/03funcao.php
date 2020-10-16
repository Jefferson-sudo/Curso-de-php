<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function soma(){
            $p = func_get_args();//Esse comando cria um vetor (p) e coloca todos os argumenos nele
            $tot = func_num_args();//Retorna o numero de argumentos  passados
            $s = 0;
             for($i = 0; $i < $tot; $i++){
                $s = $s + $p[$i];//S recebe ele mesmo + P no indici I
            }
            return $s;
        }
        $res = soma(3,4,5,11,12,13,14,15,16,17,18,19,20);
        echo "A soma é $res " ;
    ?>
</body>
</html>