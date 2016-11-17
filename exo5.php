<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercices-conditions</title>
  </head>
  <body>
    <?php
      $maVariable = 'Femme';


      echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';


      echo "</br></br>";
      if ($maVariable != 'Homme') {
        echo 'C\'est une développeuse !!!';
      }
      else {
        echo 'C\'est un développeur !!!';
      }
    ?>
  </body>
</html>
