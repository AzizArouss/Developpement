// main.js
$(function(){
	var mon_text;
    
    mon_text = $('ul li:first-child').text();
    console.log('premier li: '+mon_text);
    
    mon_text = $('ul li:nth-child(2)').text();
    console.log('deuxième li: '+mon_text);
    
    mon_text = $('ul li:last-child').text();
    console.log('dernier li: '+mon_text);
    
    var pointeur = $('#une_liste li');
    console.log(pointeur);
    
    var nouveau_text = 'Tout change';
    $('#une_liste li').text(nouveau_text); 
    
})