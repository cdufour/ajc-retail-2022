<?php

// import des questions
include "questions.php";

// récupération de l'id de la question
$id = intval($_GET["id"]); 

// récupération de la réponse fourni par le client
$response = $_GET["response"]; // soit "vrai", soit "faux"

// variable de correspondance
$translator = [
  "vrai" => true,
  "faux" => false
];

// résultat par défaut renvoyé au client
$result = "Impossible de traiter votre réponse";

$classname = "wrong";

// recherche de question par itération
for ($i = 0; $i < count($questions); $i++) {
  if ($id == $questions[$i]["id"]) { // match !
    // question trouvée

    // comparaison de la réponse fourni par le client
    // avec la bonne réponse, en comparant deux booléens
    if ($questions[$i]["response"] == $translator[$response]) {
      $result = "Bonne réponse";
      $classname = "right";
    } else {
      $result = "Mauvaise réponse";
    }

    // sortie de boucle immédiate
    break;

  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizz - Résultat</title>
  <style>
    .wrong {
      color: red;
    }
    .right {
      color: green;
    }
  </style>
</head>
<body>
  <h3 class="<?php echo $classname; ?>">
    <?php echo $result; ?>
  </h3>
  <p>
    <a href="index.php">Rejouer</a>
  </p>
</body>
</html>
