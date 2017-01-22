'use strict';

// Déclaration des constantes.
const TAUX_DE_TVA = 20.0;

// Déclaration des variables.
var montantHT;
var montantTTC;
var montantTVA;

var reponseRemise;
var montantRemise;

// Demande le montant HT à l'utilisateur.
montantHT = window.prompt('Quel est le montant HT ?');
montantHT = parseFloat(montantHT);

// Demande a l'utilisateur si il souhaite obtenir une remise.
reponseRemise = window.prompt('Voulez vous saisir une remise ?');

//Si la réponse est oui.
if (reponseRemise == 'oui' || reponseRemise == 'yes') {
	montantRemise = window.prompt('Quel est la remise que vous voulez appliquer ?');
	montantRemise = parseFloat(montantRemise);
	montantRemise = montantHT * montantRemise / 100;
	montantHT = montantHT - montantRemise;
	montantTVA = montantHT * TAUX_DE_TVA / 100;
	montantTTC = montantHT + montantTVA;
}

//Sinon, la réponse est non.
else {
	montantTVA = montantHT * TAUX_DE_TVA / 100;
	montantTTC = montantHT + montantTVA;
}

// Affichage du résultat directement dans la page HTML.
document.write
(
    '<p>Pour un montant HT de ' + montantHT + ' € avec ' + montantRemise + ' € de remise il y a ' + montantTVA + ' € de TVA.</p>'
);
document.write('<p>Le montant TTC est donc de ' + montantTTC + ' €.</p>');	