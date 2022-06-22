<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

// dans la réalité, requête vers un serveur de base de données
// pour vérifier l'existence de ces identifiants

if ($email == "admin@gmail.com" && $password == "1234") {
  $_SESSION["authenticated"] = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session - Démo</title>
</head>
<body>
  <h1>Session - Démo</h1>

  <a href="private.php">Page privée</a>
  <br>
  <a href="login.php">Connexion</a>
  <br>
  <a href="logout.php">Déconnexion</a>
  
</body>
</html>