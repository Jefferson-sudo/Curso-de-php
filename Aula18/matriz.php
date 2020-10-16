<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        echo"<p>Hello word!</p></br>";
        $m  = array(array(6,4),
                    array(4,9),
                    array(3,2));
        $m [2] [0] = $m [2][1];
                    
        print_r($m);
    ?>
    </pre>
</body>
</html>