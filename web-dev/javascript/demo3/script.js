/*
  Récupère la valeur d'un input, calcule et affiche un carré
*/

// fonctions persos
function square(x) {
  return x * x;
}


// ciblage
const num = document.getElementById("num");
const btn = document.getElementById("btn");
const result = document.getElementById("result");

// gestion événementielle
btn.addEventListener("click", function() {

  // convertit une chaîne en entier
  var val = parseInt(num.value);

  if (val > 999) {
    result.innerText = "Je n'accepte pas de calculer le carré d'une valeur supérieure à 1000 !";
  } else {
    result.innerHTML = "Le carré de " + val + " vaut <strong>" + square(val) + "</strong>";
  }

})