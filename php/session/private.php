<?php
session_start(); // utilise la session en cours ou bien en démarre une nouvelle (nouveau cookie)

$access = false;

if ($_SESSION["authenticated"] == true) {
  // accès autorisé
  $access = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Private Page</title>
</head>
<body>
  <h1>Private Page</h1>

  <?php

  if ($access) {
    echo "<p>Accès autorisé<p>";
  } else {
    echo "<p>Accès refusé</p>";
    echo '<a href="login.php">Login</a>';
  }

  ?>
</body>
</html>