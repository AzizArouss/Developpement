"use strict";
console.log('main.js');

var type = "local";
var tab = new Array();

var tab_liens =['val lien 1', 'val lien 2', 'val lien 3'];
function affiche_infos_lien(){
	var text_content;
	text_content = $(this).text();

	var index;
	index = $(this).data('bd');
	$('#val_lien').html('').append(text_content);
	$('#val_lien_2').html('').append(tab_liens[index]);

}

// document.addEventListener('DOMContentLoaded', function() // ou
// $(fonction anomyme)
$(function()
{
	console.log('appel initial');

	verifie_couleur_existante();

	// document.querySelector('#sauve_couleur').addEventListener('click',  sauvegardeCouleur);
	$("#sauve_couleur").on('click', changeCouleurFond);

	$('#sauve_json').on('click', sauveJson);
	$('#ajoute_json').on('click', ajouteJson);

	$('#liste_data li').on('click', recup_data);

	$('#une_liste li').on('click', affiche_infos_lien);

});