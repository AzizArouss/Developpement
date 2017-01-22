'use strict';   // Mode strict du JavaScript

var list = ["Café", "Chocolat", "Fraise"];

function affichage(){
	for (var i = 0; i < list.length; i++){
	console.log(list[i]);
	}
	console.log('Il y a ' + i + 'produit(s).');
}

function add() {
	var produit = prompt('Quel produit voulez-vous ajouter ?');
	list(list.length) = produit;
}

function remove() {
	produit = prompt('On supprime quel produit ?');
	if (list.indexOf(produit)!= -1){
		list.splice(list.indexOf(produit), 1);
	}
}

function removeall() {
	list.splice(0, list.length);
	console.log('La liste est complètement delete');
}