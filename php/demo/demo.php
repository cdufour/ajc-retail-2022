<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1 {
      color: orange
    }
  </style>
</head>
<body>
  <?php

  // déclaration et initialisation de variables
  // variable = valeur
  $name = "Christophe"; // chaîne de caractères
  $a = 5; // valeur numérique (entière)
  $b = 3.2; // valeur numérique (décimale)
  $strong = true; // valeur booléenne (binaire)

  // echo gettype($strong); renvoie "boolean"


  $alex_note1 = 8;
  $alex_note2 = 10;
  $alex_note3 = 14;
  $alex_note4 = 19.5;

  // tableau []. Indexé à 0. 
  // tableau à indice numérique (commence à 0)
  // Le premier élément est accessible à l'indice 0
  $alex_notes = [8, 10, 14, 19.5]; 
  echo $alex_notes[2]; // renvoie la troisième note (14)

  // tableau associatif (associative array)
  $tab = ["toto" => "tata"];
  echo $tab["toto"];

  $artist = [
    "firstname" => "Alexandre",
    "lastname" => "Dumas",
    "birth" => "24/07/1802",
    "books" => [
      "Les Trois Mousquetaires", 
      "Le Comte de Monte-Cristo"
    ]
  ];

  // retourne "Le Comte de Monte-Cristo"
  echo $artist["books"][1];
  // concaténation
  // assemblage de chaînes statique et d'éléments dynamiques
  echo "<h1>" . ($a + $b) . "</h1>";

  ?>
</body>
</html>

