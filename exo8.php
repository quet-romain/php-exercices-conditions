<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercices-conditions</title>
  </head>
  <body>
    <?php
      $maVariable = true;

      echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';

      echo '</br></br>';

    if ($maVariable) {
      echo 'c\'est ok !!';
    }
    else {
      echo 'c\'est pas bon !!!';
    }
    ?>
  </body>
</html>
