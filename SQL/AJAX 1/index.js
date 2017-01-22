/*DONNEES*/

/*FONCTIONS*/
function retour_html(retour_script){
    $("#target").html(retour_script);
}

function retour_json(retour){
    $("#target_2").html(retour);
    var tab = JSON.parse(retour);
    var display = '';
    console.log(tab);
    for (var i = 0; i < tab.length; i++) {
        display += '<p>';
        display += tab[i].prenom;
        display += '';
        display += tab[i].nom;
        display += '</p>';
    }
    $("#target_2").html(display);
    console.log(retour);
}

function retour_json2(retour){
    var tab = JSON.parse(retour);
    $("#target_3").html("<p>"+tab["prenom"]+" "+tab["nom"]+"</p>");
}

/*EXECUTION*/
$(function(){
    var url = 'php/code_html.php';
    $.get(url, retour_html);

    var url2 = 'php/code_json.php';
    $.get(url2, retour_json);

    var data = "index=2";
    url3 = 'php/code_json_select.php';
    $.get(url3, data, retour_json2)
});