<?php
// inclut l'autoloader de class
include_once('class/Autoloader.class.php');
Autoloader::autoloading();

$prem = new Connect();
$BDD = $prem->BDD;
$result = $BDD->prepare('select * from Author');
$result->execute();
$author = $result->fetchAll(PDO::FETCH_ASSOC);
var_dump($author);