<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Note</title>
</head>
<body>

  <?php

    include "data.php";

    $id = intval($_GET["id"]);

    // par défaut, on considére que l'id
    // recherché ne correspond à aucun étudiant
    $found = false;

    // recherche d'un étudiant ayant cet id
    // nous devons parcourir le tableau des étudiants
    // la fonction count retourne le nombre d'éléments du tableau qu'on lui donne en entrée
    for ($i = 0; $i < count($students); $i++) {
      
      if ($students[$i]["id"] == $id) { // match !!!
        // l'étudiant ayant cet id a été trouvé
        echo "Note obtenue par " . $students[$i]["name"] . ": ";
        echo $students[$i]["note"] . "/20";

        $found = true; // étudiant trouvé

        // sortie de boucle immédiate
        break;
      }
    }

    if ($found == false) {
      echo "Aucun étudiant ne correspond à votre recherche";
    }
  
  ?>
  
  <p>
    <a href="index.php">Liste des étudiants</a>
  </p>

</body>
</html>