console.log('events.js');

function changeCouleurFond(){
	console.log('fonction changeCouleurFond: ');

	var couleur;
	var checkbox_session;
	var checkbox_local;
	var duree;

	couleur = '#'+$('#couleur').val();
	checkbox_session = $('#session').val();
	checkbox_local = $('#local').val();
	duree = $('input[type=radio]:checked').val();
	console.log('couleur: '+couleur);
	console.log('checkbox: '+duree);


	$('html').css('background-color',couleur);

	if (duree == 'session'){
		sauvegardeCouleur_session(couleur);
	}else{
		sauvegardeCouleur_local(couleur);
	}
}

function sauveJson(){
	console.log('fonction sauveJson: ');
	var identite = {};
	var tab =[];
	identite.prenom = $('#prenom').val();
	identite.nom = $('#nom').val();

	tab.push(identite);
	// console.log(identite);

	sauveWebStorage(type, 'identite', identite);
}

function ajouteJson () {
	console.log('fonction ajouteJson: ');
	// var tab = new Array();
	var identites = recup_existant('identites');
	var identite = recup_form();
	console.log(identites);
	console.log(identite);

	// tab.push(identites);
	// tab.push(identite);

	identites.push(identite);

	console.log(identites);

	sauveWebStorage(type, 'identites', identites)
}

function recup_form(){
	console.log('fonction recup_form: ');

	var identite={};
	identite.prenom = $('#prenom').val();
	identite.nom = $('#nom').val();

	return identite;
}

function recup_data(){
	var data_tab;
	var dat_val;
	data_tab = $(this).data('tab');
	data_val = $(this).text();
	console.log('data_tab: '+data_tab);
	console.log('data_val: '+data_val);
}


