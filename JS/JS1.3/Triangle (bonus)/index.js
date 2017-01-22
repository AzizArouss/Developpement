'use strict';   // Mode strict du JavaScript

var i;
var question = prompt("Combien de lignes voulez vous pour votre triangle ?");
var ligne = "";

for (i = 1; i <=question; i++){
	ligne = ligne + i;
	document.write("<p>"+ ligne +"</p>");
}
