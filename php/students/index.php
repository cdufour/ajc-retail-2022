<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Etudiants - notes</title>
  <style>
    .loser {
      color: red;
    }

    .icon {
      height: 16px
    }
  </style>
</head>
<body>
  <h1>Etudiants - notes à l'examen</h1>

  <?php

    // inclusion de la variable $students
    // définie dans le fichier data.php
    include "data.php";

    echo "<ul>";

    // Itération du tableau
    foreach ($students as $student) {

      if ($student["note"] < 10) {
        echo '<li class="loser">';
      } else {
        echo '<li>';
      }
      
      echo $student["name"];
      echo " (" . $student["note"] . "/20)";

      if ($student["note"] >= 18) {
        echo '<img class="icon" src="coupe.png">';
      }

      echo "</li>";
    }

    echo "</ul>";

  ?>
  
</body>
</html>