// Mode strict du JavaScript
'use strict';

//Déclaration des constantes
//Déclaration des variables
var nombre1;
var nombre2;
var operation;
var reponse;

// Demande du premier nombre à l'utilisateur
nombre1 = window.prompt('Quel est le premier nombre ?');
nombre1 = parseFloat(nombre1);

// Demande du second nombre à l'utilisateur
nombre2 = window.prompt('Quel est le second nombre ?');
nombre2 = parseFloat(nombre2);

//Demande du choix de l'opération à l'utilisateur
operation = window.prompt('Que voulez vous faire avec ces deux nombres ?');

//Mise en place des 4 opérations mathématiques
if (operation == '+' || operation == 'addition') {
	reponse = nombre1 + nombre2;
}

else if (operation == '-' || operation == 'soustraction') {
	reponse = nombre1 - nombre2;
}

else if (operation == '*' || operation == 'multiplication') {
	reponse = nombre1 * nombre2;
}

else if (operation == "/" || operation == 'divison') {
	reponse = nombre1 / nombre2;
}

// Affichage du résultat directement dans la page HTML.
document.write('<p>Le résultat des deux nombres est : '+ reponse +' </p>');	