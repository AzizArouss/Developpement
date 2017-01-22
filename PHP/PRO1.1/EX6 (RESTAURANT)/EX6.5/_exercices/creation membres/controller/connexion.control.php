<?php
if (file_exists(PATH_MODEL.'/'.$page.'.model.php'))
	include(PATH_MODEL.'/'.$page.'.model.php');


// on vérifie si le user existe avec ce pseudo et mot de passe
// si le POST n'est pas vide c'est qu'on a cliqué sur le bouton ouvrir
if (!empty($_POST)){
	if(($result = $connection->user_exists($user)) == false){

		$_SESSION['user']['erreur']['connecterror'] = 'Pseudo ou pass incorrects';
	}else{
		$_SESSION['user']['session']['idusers'] = $result['idusers'];

		header('location: index.php?page=schow_account');
		exit();
	}
}


include (PATH_VUE.'/layout.phtml');