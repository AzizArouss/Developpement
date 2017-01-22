'use strict';   // Mode strict du JavaScript

var tableau;
var nombre;

tableau = ["X","XX","XXX","XXXX","XXXXX","XXXXXX","XXXXXXX","XXXXXXXX","XXXXXXXXX","XXXXXXXXXX"]

nombre = window.prompt('Quel est le nombre de ligne ?');
nombre = parseFloat(nombre);
document.write(tableau[nombre-1]);