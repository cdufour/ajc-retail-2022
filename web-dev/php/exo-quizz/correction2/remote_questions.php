<?php

// connection à un serveur de base de données MySQL chez AWS (distant)
$host = "dev.cuewgndcfidb.eu-west-3.rds.amazonaws.com";
$dbname = "demo";
$username = "admin";
$password = "admin_123";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  // requête sql de sélection (lecture)
  $sql = 'SELECT * FROM users'; // syntaxe SQL

  // exécution de la requête
  $result = $pdo->query($sql);

  // exploitation de la réponse du serveur SQL
  // fecthAll transforme les lignes SQL en tableaux associatifs PHP
  $questions = $result->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>