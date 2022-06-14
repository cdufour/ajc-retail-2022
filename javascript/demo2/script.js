/*
Zoom Avant/Arrière sur une image
*/

// variables et constantes diverses
var img_width = 800; // largeur initiale de l'image
const STEP = 100;
const WIDTH_MAX = 1200;
const WIDTH_MIN = 200;

// ciblage
var btn = document.getElementById("btn");
var btn2 = document.getElementById("btn2");
var img = document.getElementById("img");


// gestion événementielle

// zoom arrière
btn.addEventListener("click", function() {
  if (img_width > WIDTH_MIN) {
    img_width = img_width - STEP;
    img.style.width = img_width + "px";
  }
})

// zoom avant
btn2.addEventListener("click", function() {
  if (img_width < WIDTH_MAX) {
    img_width = img_width + STEP;
    img.style.width = img_width + "px";
  }
})