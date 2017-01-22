<?php
//Dependances
include_once('utilities.php');

//Fonctions
function addTask($titre, $description, $priorite, $date){
	echo "je suis dans addTask()";

	//creer une table de la tâche
	$task = [
			$titre,
			$description,
			$priorite,
			$date
	];
	saveTask($task);
}

var_dump($_POST);

//Execution
if(empty($_POST['titre'])==false){
	//recuperation données formulaire
	$titre = $_POST['titre'];
	$description = $_POST['description'];
	$priorite = $_POST['priorite'];
	$date = $_POST['year'].'-'.$_POST['mois'].'-'.$_POST['day'];
	addTask($titre, $description, $priorite, $date);
}

//header('Location:index.php');
exit();
?>