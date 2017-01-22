'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/

var image = [
{nom:"images/1.jpg", titre:"titre1"},
{nom:"images/2.jpg", titre:"titre2"},
{nom:"images/3.jpg", titre:"titre3"},
{nom:"images/4.jpg", titre:"titre4"},
{nom:"images/5.jpg", titre:"titre5"},
{nom:"images/6.jpg", titre:"titre6"},
];

var state;
var icon;
var toolbar;


CONST TOUCHE_DROITE = 39;
CONST TOUCHE_GAUCHE = 37;
CONST TOUCHE_ESPACE = 32;

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function aff_toolbar() {
	icon = document.querySelector("#toolbar_toggle i");
	if (icon.classList.contains("fa-arrow-down") == true) {
		icon.classList.remove("fa-arrow-down");
		icon.classList.add('fa-play');
		icon.classList.toggle("hide");
	}
}

function aff_next() {
	state.index++;
	if (state.index == image.length) {
		state.index = 0;
	}
	affiche_image();
}

function aff_previous() {}

function aff_random() {
	do {
		var index = getRandomInteger(0, image.length - 1);
	}
	while(state.index == index)
		state.index = index;
	affiche_image();
}

function play_stop() {
	var icon = document.querySelector('#slider-toggle');
	icon.classList.toggle('fa-play');
	icon.classList.toggle('fa-pause');

	if(state.timer == null){
		state.timer = window.setInterval(aff_next, 2000);
		this.title = "Arrêter le caroussel";
	} else {
		clearInterval(state.timer);
		state.timer = null;
		this.title = "Démarrer le caroussel";	
	}
}


function aff_key(event) {
	switch(event.keycode) {
		case TOUCHE_DROITE;
			aff_next;
			break;
		case TOUCHE_GAUCHE;
			aff_previous;
			break;
		case TOUCHE_ESPACE;
			aff_play_stop;
			break;
	}

}

function affiche_image(){
	var slider_image = document.querySelector("#slider img");
	var slider_titre = document.querySelector("#slider figcaption");
	slider_image.src = image[state.index].nom;
}



/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

document.addEventListener("DOMContentLoaded",function(){
	state = {};
	state.index = 0;
	state.timer = null;
	ecoute_bouton("#toolbar_toggle","click",aff_toolbar);
	ecoute_bouton("#slider_next","click",aff_next);
	ecoute_bouton("#slider_previous","click",aff_previous);
	ecoute_bouton("#slider_random","click",aff_random);
	ecoute_bouton("html","keyup",aff_key);
	affiche_image();
});