var forme;

//Exportation des données
function import_html(event){
    console.log(event);
    var fichier
    forme = $(this).find('input').val();
 
    switch(forme){
        case 'rectangle':
            fichier = 'rectangle.html';
            break;
 
        case 'carre':
            fichier = 'carre.html';
            break;
 
        case 'ellipse':
            fichier = 'ellipse.html';
            break;
 
        case 'cercle':
            fichier = 'cercle.html';
            break;
 
        case 'triangle':
            fichier = 'triangle.html';
            break;
    }
    console.log(fichier);
    $("#fomulaire").load(fichier);
}
 
//Pop du formulaire du click de la souris
$(function(){
    $("#choix_fomulaire li").on('click', import_html);
    $("#choix_fomulaire li label").on('click', function(ev){
        ev.stopPropagation();
        //return false;
    });
})