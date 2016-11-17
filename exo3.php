<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercices-conditions</title>
  </head>
  <body>
    <?php
      $age = 20;
      $genre = "Homme";

    if ($age>= 18) {
      if ($genre == "Homme") {
        echo "Vous êtes un homme et vous êtes majeur";
      }
      elseif ($genre == "Femme") {
        echo "Vous êtes une femme et vous êtes majeur";
      }
    }
    else {
      if ($genre == "Homme") {
        echo "Vous êtes un homme et vous êtes mineur";
      }
      elseif ($genre == "Femme") {
        echo "Vous êtes une femme et vous êtes mineur";
      }
    }
    ?>
  </body>
</html>
