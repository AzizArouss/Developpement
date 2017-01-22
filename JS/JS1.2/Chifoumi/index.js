'use strict';   // Mode strict du JavaScript

var choixUtilisateur = prompt("Pierre ! Feuille ! Ciseaux ! VITE DEPECHE TOI DE CHOISIR !");
var choixOrdi = Math.random();

if (choixOrdi <= 0.33)
{
    choixOrdi = "Pierre";
}
else if(choixOrdi <= 0.66)
{
    choixOrdi = "Feuille";
}
else
{
    choixOrdi = "Ciseaux";
}

document.write("<p>IA a choisi : " + choixOrdi +"</p>");

{
    if (choixOrdi === choixUtilisateur){
    	console.log("Draw !");
    	document.write("<p>Draw !</p>");
    }
    else if (choixOrdi === "Pierre"){
    	if (choixUtilisateur === "Feuille"){
    		document.write("<p>Feuille Winner ! PAR DESSUS LA TROISIEME CORDE</p>");
        }
        else {
            document.write("<p>Pierre Winner ! PAR SOUMISSION</p>");
        }           
    }
    else if (choixOrdi === "Feuille"){
    	if (choixUtilisateur === "Ciseaux"){
   		document.write("<p>Ciseaux Winner ! COUP DE LA CORDE A LINGE ! è_é</p>");
        }
        else {
            console.log("Feuille gagne");
            document.write("<p>BREAKING NEWS, Leaf Winner !</p>");
        }           
    }
    else if (choixOrdi === "Ciseaux"){
    	if (choixUtilisateur === "Pierre"){
    		document.write("<p>Victory ! ~ Pierre</p>");
        }
        else {
            document.write("<p>Yay ! ~ Ciseaux</p>");
        }           
    }
}