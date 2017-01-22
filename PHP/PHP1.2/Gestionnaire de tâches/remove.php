<?php

var_dump($_POST);
//DEPENDANCE
include_once('utilities.php');

//FONCTION
function removeTasks(array $allTasks, array $index){
	foreach ($allTasks as $key => $val) {
		if(in_array($key, $index)== false){
			$tasks[]= $val; 
		}
	}
	return $tasks;
}

//EXECUTION DU CODE
if(array_key_exists('index', $_POST) == true){
	$allTasks = loadTasks();
	$tasks = removeTasks($allTasks, $_POST['index']);
	saveTasks($tasks);
}

//header('Location: index.php');
//exit();
?>