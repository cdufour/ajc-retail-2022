<?php

// import des questions
include "questions.php";

// rand(min, max) renvoie un entier compris entre min et max, de manière aléatoire
// ici, max est le nombre de questions
$random_index = rand(0, count($questions) - 1); 
$random_question = $questions[$random_index];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizz</title>
</head>
<body>
  <h1>Quizz</h1>
  <h3>
    <?php
    echo $random_question["title"];
    ?>
  </h3>
  <form action="check-response.php" method="get">
    <input type="submit" name="response" value="vrai">
    <input type="submit" name="response" value="faux">
    <!-- transmission de l'id de la question, en tant que paramètre d'url, via un champ caché de formulaire -->
    <input type="hidden" name="id" value="<?php echo $random_question["id"]; ?>">
  </form>
</body>
</html>