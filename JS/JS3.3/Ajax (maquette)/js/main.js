var url;

function choix_bouton(){
    console.log("choix_bouton");
    var navigation = $('input[name=affich]:checked').val(); 

    switch (navigation){
        case "html":
            url = 'php/code_html.php';
            $.get(url, retour_html)
            break;

        case "json": 
            url = 'php/code_json.php';
            $.get(url, retour_json)
            break;

        case "films":
            url = 'php/code_films.php';
            $.get(url, retour_html)
            break;       
    }
}

function retour_html(data){
    $('#target').html(data);
}

//FIRST TRY function retour_json
/*function retour_json(data){
    $('#target_2').html(data);
    for (var i = 0; i < data.length; i++){
    $('#target_2').append('<p>'+data[i].prenom+' '+data[i].tel+'</p>');
    }
}*/

//SECOND TRY retour_json
function retour_json(data){
    $('#target').html(data);
    var tab = JSON.parse(data);
    var display = '';
    console.log(tab);
    for (var i = 0; i < tab.length; i++){
        display += '<p> Prénom : ';
        display += tab[i].Prenom;
        /*display += '<br>';*/
        display += '<p> Nom : ';
        display += tab[i].Nom;
        /*display += '<br>';*/
        display += '<p> Numéro : ';
        display += tab[i].Telephone;    
        display += '<br>';
    }
    $('#target').html(display);
    console.log(data);
}

 /*-------------------------------------------------------------------------------------------
 ---------------------------------------------------------------------------------------------
 -------------------------------------------------------------------------------------------*/

$(function(){
  $("#submit").on( "click", choix_bouton);

    // url = 'php/code_html.php';
    // $.get(url, retour_html)

    //  url = 'php/code_json.php';
    // $.get(url, retour_json)

});