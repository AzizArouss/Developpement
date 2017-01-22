"use strict";

$(document).ready( function () {
	$("#connexionForm").submit( function() {
		var donnees=$("#connexionForm").serialize();
		console.log(donnees);						 
		$.ajax({
		   type: 'POST',
		   url: 'login.php',
		   data: "login="+$('#login').val()+"&pass="+$("#pass").val(),
		   success: function(msg){
				console.log(msg);
				if(msg==1) // si la connexion en php a fonctionnée
				{
					$("div#connexion").html("<span id=\"confirmMsg\">Vous &ecirc;tes maintenant connect&eacute;.</span>");
					// on désactive l'affichage du formulaire et on affiche un message de bienvenue à la place
				}
				else // si la connexion en php n'a pas fonctionnée
				{
					$("span#erreur").html("<img src=\"bomb.png\" style=\"float:left;\" />&nbsp;Erreur lors de la connexion, veuillez v&eacute;rifier votre login et votre mot de passe.");
					// on affiche un message d'erreur dans le span prévu à cet effet
				}
		   }
		});
		return false;
	});
});