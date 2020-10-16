<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriaveis variaveis</title>
</head>
<body>
    <?php
        $x = "abc";
        $$x = "def";
        echo"O conteudo da variavel x é $x";
        echo"<br/>A variavel criada recebeu o valor ". $abc." e possui o nome de abc -> que o valor que esta dentro da variavel x";
    ?>
</body>
</html>