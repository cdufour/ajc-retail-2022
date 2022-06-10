<?php

/*
echo "bonjour !";
echo "bonjour !";
echo "bonjour !";
echo "bonjour !";
echo "bonjour !";
*/

$notes = [14, 5, 20, 7, 10];
// équivalent aux instructions ci-dessus
for ($i = 0; $i < 5; $i++) {
  //echo "bonjour !";
  //echo $notes[$i];
}

// boucle spécialisée dans l'itération de tableau
// ici, la variable $note prend la valeur
// de l'élément du itéré dans le tableau $notes
foreach ($notes as $note) {
  echo $note . "<br />";
}



?>