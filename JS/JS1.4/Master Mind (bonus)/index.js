'use strict';   // Mode strict du JavaScript

/*MASTER MIND

> Valeurs : 1, 2, 3, 4, 5 (exclusive)
> 10 coups pour trouver la bonne combinaison
> Valeurs bien positionnées
> Valeurs existantes*/

var choixCombinaison
var choixCombinaison = parseInt(prompt("Combinaison 4 chiffres ?"));
console.log(choixCombinaison);

var choixIA = [];
var choixJ1 = [];

function tirageIA() {
	var tirage = Math.floor(Math.random() * 5) + 1;
	choixIA.push(tirage);
}

function CombinaisonJoueur() {

}