function ecoute_bouton(selecteur, type, eventhandler) {
	var domObject;
	domObject= document.querySelector(selecteur);
	domObject=addEventListener(type,eventhandler);
}

function getRandomInteger(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}