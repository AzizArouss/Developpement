"use strict"

var date = new Date();
var heure = new Date().getHours();
var min = new Date().getMinutes();
var seconde = new Date().getSeconds();

var options = {
	weekday:'long',
	year:'numeric',
	month:'long',
	day:'numeric',
};

document.write("Nous sommes le " + date.toLocaleString('fr-FR', options) + " et il est "+heure+" heure "+min+" minutes et "+seconde+" secondes.");