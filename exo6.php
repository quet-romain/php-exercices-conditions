<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercices-conditions</title>
  </head>
  <body>
    <?php
      $monAge = 2;

    echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';

    echo "</br></br>";

    
    if ($monAge >= 18) {
      echo 'Tu es majeur';
    }
    else {
      echo 'Tu n\'es pas majeur';
    }
    ?>
  </body>
</html>
