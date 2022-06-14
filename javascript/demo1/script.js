/*
Masque/affiche une image au clic sur un bouton
*/

var on = true;

// ciblage
var btn = document.getElementById("btn");
var img = document.getElementById("img");

// gestion événementielle
btn.addEventListener("click", function() {
  //img.remove(); // retire l'élément du DOM

  if (on) {
    img.style.display = "None";
    btn.innerText = "Afficher l'image";
  } else {
    img.style.display = "Inline";
    btn.innerText = "Masquer l'image";
  }

  on = !on; // inverse la valeur booléenne grâce à l'opérateur !

})