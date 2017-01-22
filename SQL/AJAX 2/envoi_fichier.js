'use strict';

function envoiInfos(event) {

	event.preventDefault();
	var donnees = $(this).serialize();
	console.log(donnees);
	var url ='recup_form.php';

	$.ajax({

    url: url,
    type: 'POST',
    data: donnees,
    //processData: false,
    //contentType: false, 
    success: function(retour){retour_envoi(retour);},
});
}

function retour_envoi(retour){
	$('#target').html(retour);
	console.log(retour);
}