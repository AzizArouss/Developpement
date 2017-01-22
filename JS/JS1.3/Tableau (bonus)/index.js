'use strict';   // Mode strict du JavaScript
	
/*var monHuile1 = {
	marque		: 'Puget',
	description : 'DescriptionP',
	condition	: '1L',
	prix		: '5€',
	photo		: 'http://www.coursesenfrance.com/components/com_virtuemart/shop_image/product/PUGET_HUILE_D_OL_4c29a00d7387f.jpg',
}

var monHuile2 = {
	marque		: 'Lessieur',
	description : 'DescriptionL',
	condition	: '2L',
	prix		: '5€',
	photo		: 'http://www.aswakouarzazate.com/images/produits/16_lesieur.jpg',
}

document.write('<table>');
document.write('<tr>');
	document.write('<th>Marque</th>');
	document.write('<th>Description</th>');
	document.write('<th>Condition</th>');
	document.write('<th>Prix</th>');
	document.write('<th>Photo</th>');
document.write('</tr>');
document.write('<tr>');
	document.write('<td>' + monHuile1.marque + '</td>');
	document.write('<td>' + monHuile1.description + '</td>');
	document.write('<td>' + monHuile1.condition + '</td>');
	document.write('<td>' + monHuile1.prix + '</td>');
	document.write('<td>' + monHuile1.photo + '</td>');
document.write('</tr>');
document.write('<tr>');
	document.write('<td>' + monHuile2.marque + '</td>');
	document.write('<td>' + monHuile2.description + '</td>');
	document.write('<td>' + monHuile2.condition + '</td>');
	document.write('<td>' + monHuile2.prix + '</td>');
	document.write('<td>' + monHuile2.photo + '</td>');
document.write('</tr>');
document.write('</table>');*/

var monHuile1 = ['Puget', 'DescriptionP', '1L', '5€', ''];
var monHuile2 = ['Lessieur', 'DescriptionL', '2L', '5€', ''];

var monHuile = {maMarque1:monHuile1, maMarque2:monHuile2};
var i;

document.write('<table>');
document.write('<tr>');
	document.write('<th>Marque</th>');
	document.write('<th>Description</th>');
	document.write('<th>Condition</th>');
	document.write('<th>Prix</th>');
	document.write('<th>Photo</th>');
document.write('</tr>');

for(var id in monHuile);
	document.write('<tr>');
	for(i = 0; i < monHuile[id].length; i++){
		document.write('<td>' + monHuile[id][i] + '</td>');
	document.write('</tr>');
	}
document.write('</table>');
