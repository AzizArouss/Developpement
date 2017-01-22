"use strict";

var date = new Date('2014-04-05');

var options = {
	weekday:'long',
	year:'numeric',
	month:'long',
	day:'numeric',
};

var myDate = date.toLocaleString('fr-FR', options);

var voiture = {
	marque : "Honda", 
	anneeFabrication : "Accord", 
	dateAchat : 1998,
	passager : ["Alpha", "Gamma"]
};

for (var id in voiture) {
	document.write("<li>" + id + " : " + voiture[id] + "</li>")
};