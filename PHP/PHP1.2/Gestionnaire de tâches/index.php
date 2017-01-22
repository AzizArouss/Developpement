<?php
header('content-type: text/html; charset=utf8');
$now = date_create();


include_once('utilities.php');
$tasks = LoadTasks();
var_dump($tasks);
include_once('index.phtml');

?>	

