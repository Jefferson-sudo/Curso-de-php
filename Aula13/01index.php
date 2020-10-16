<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      for ($i = 1; $i <= 10; $i++){
          echo "$i ";
      }
      echo'<br/>';
      for($c = 10; $c >= 1; $c --){
          echo "$c ";
      }
      for($i = 0; $i <= 100; $i+=5){
        echo "$i<br/>";
      }
    ?>
</body>
</html>