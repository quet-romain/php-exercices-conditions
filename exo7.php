<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercices-conditions</title>
  </head>
  <body>
    <?php
      $maVariable = true;

    echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';

    echo '</br></br>';

    if ($maVariable == false) {
      echo 'c\'est pas bon !!!';
    }
    else {
      echo 'c\'est ok !!';
    }
    ?>
  </body>
</html>
