$(document).ready(function() {
	if (document.getElementById("background-image").className == "sunset") {
		// Change the colour of the texts on the navbar to suit the background image. 
		var list = document.getElementsByClassName("container-fluid");
		var i;

		for (i = 0; i < list.length; i++) {
			list[i].stlye.color="red";
			//list[i].style.background-color="blue";
		}
	}
})