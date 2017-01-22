<?php

const DATAFILE = "tasks.csv";

function loadTasks()
{
	$file = fopen(DATAFILE, 'a+');
	$tasks = [];
	while (true) 
	{
		$task = fgetcsv($file);
		if ($task == false)
		{
			break;
		}
		$tasks[] = $task;
	}	
	fclose($file);
	return $tasks;
}

function saveTask(array $task){
	$file = fopen(DATAFILE, 'a+');
	fputcsv($file, $task);
	fclose($file);
}

function saveTasks(array $allTasks){
	$file = fopen(DATAFILE, 'w');
	foreach ($allTasks as $val) {
		fputcsv($file, $val);
	}
	fclose($file);
}

?>