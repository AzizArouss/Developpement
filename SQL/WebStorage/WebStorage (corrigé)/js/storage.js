console.log('storage.js');

function sauvegardeCouleur_session(couleur){
	console.log('fonction sauvegardeCouleur_session');
	var couleur;
	sessionStorage.setItem('couleurFond', couleur);
	localStorage.removeItem('couleurFond');

}

function sauvegardeCouleur_local(couleur){
	console.log('fonction sauvegardeCouleur_local');
	var couleur;
	localStorage.setItem('couleurFond', couleur);
	sessionStorage.removeItem('couleurFond');
}


function verifie_couleur_existante(){
	var coul_locale_storage;
	var coul_session_storage;
	var coul_fond;

	coul_locale_storage = localStorage.getItem('couleurFond');
	coul_session_storage = sessionStorage.getItem('couleurFond');
	console.log('coul_locale_storage: '+coul_locale_storage);
	console.log('coul_session_storage: '+coul_session_storage);

	if (coul_session_storage != null){
		coul_fond = coul_session_storage;
	}else if(coul_locale_storage != null){
		coul_fond = coul_locale_storage;
	}else{
		coul_fond = "#ffffff"
	}

	console.log('coul_fond: '+coul_fond);

	$('html').css('background-color', coul_fond);

	// console.log('localStorage.couleurFond'+localStorage.couleurFond);
}

function sauveWebStorage(type, key, value){
	var type;
	var key;
	var value;
	console.log(type);
	console.log(key);
	console.log(value);
	
	jsonData = JSON.stringify(value);
	console.log('type: '+jsonData);
	console.log('jsonData: '+jsonData);
	if (type == 'session'){
		sessionStorage.setItem(key, jsonData);
	}else{
		localStorage.setItem(key, jsonData);
	}
}

function recup_existant (key) {
	var identites;


	if (type == 'session'){
		identites = JSON.parse(sessionStorage.getItem(key));
	}else{
		identites = JSON.parse(localStorage.getItem(key));
	}

	console.log(identites);
	if (identites == null){
		identites = new Array();
	}
	console.log(identites);

	return identites;
}