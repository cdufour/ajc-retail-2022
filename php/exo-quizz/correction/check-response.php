<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizz - Réponse</title>
</head>
<body>
  <?php
    if ($_GET['response'] == "vrai") {
      echo "Mauvaise réponse, c'est Rome !";
    } else {
      echo "Bonne réponse";
    }
  ?>

  <p>
    <a href="index.php">Rejouer</a>
  </p>
</body>
</html>