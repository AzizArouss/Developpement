'use strict';   // Mode strict du JavaScript

var ligne;
var colonne;
var n = parseFloat(prompt("Nombre ?"));

for (ligne = 1; ligne <= n; ligne++) {
	document.write("<tr>");

for (colonne = 1; colonne <= n; colonne++)
	document.writeln("<td align=\"right\">",ligne*colonne,"</td>");
 	document.writeln("</tr>");
}