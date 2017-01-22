"use strict"

//Création de l'instance de l'objet avec new.
var now 	= new Date();

//Affectation de valeurs
var annee   = now.getFullYear();

//+1 Parce que nous avons 12 mois, mais notre getMonth prend en compte a partir de 0 donc du coup 0 = Janvier, 1 = Février etc etc.
var mois    = now.getMonth() + 1;

var jour    = now.getDate();
var heure   = now.getHours();
var minute  = now.getMinutes();
var seconde = now.getSeconds();

//Affichage du contenu dans la page HTML.
document.write("Nous sommes le "+jour+" "+mois+" "+annee+" et il est "+heure+" heure "+minute+" minutes "+seconde+" secondes" );