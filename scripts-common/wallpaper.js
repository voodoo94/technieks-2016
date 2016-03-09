$(document).ready(function() {
  var d = new Date();
  var n = d.getHours();
  if (n > 6 && n <=10) {
    document.getElementById("background-image").className = "morning";
  } else if (n > 10 && n <= 16) {
    document.getElementById("background-image").className = "roadtrip";

    var list = document.getElementsByClassName("con_images");
    var i;
    for (i = 0; i < list.length; i++) {
      list[i].style.color = "#FFF";
    } 
  } else if (n > 16 && n <= 20) {
    document.getElementById("background-image").className = "sunset";
  } else {
    document.getElementById("background-image").className = "night";
  }
});