/*

*/

var img_path = "https://s3.eu-west-3.amazonaws.com/cities.opusidea.org/cities/";

// ciblage
const select = document.getElementById("select");
const images = document.getElementsByClassName("city");

// gestion événementielle
select.addEventListener("change", function() {
  var choice = select.value.toLowerCase();

  // on ne modifie pas les images
  // si l'utilisateur choisit l'option "Destination"
  if (choice != "destination") {
    
    // intération sur l'ensemble des images
    // afin de modifier leur source et leur visibilité css
    for (var i = 0; i < images.length; i++) {
      images[i].src = img_path + choice + (i+1) + ".jpg";
      images[i].style.display = "inline";
    }

  } else { // l'utilisateur a choisi l'option "Destination"
    
    // masque toutes les images
    for (var i = 0; i < images.length; i++) {
      images[i].style.display = "none";
    }
  
  }
  

})