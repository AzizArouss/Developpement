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



// gestion des erreurs
function affiche_string($var){
	if (is_array($var)){
		throw new Exception('La variable $var est un tableau, ce doit être un string');
	}
	echo $var.'<br>';
};

$var = 17;
$tab = ['index1' => 'val1', 'index2' => 'val2', 'index3' => 'val3'];

try // Nous allons essayer d'effectuer les instructions situées dans ce bloc.
{
  affiche_string($var);
  affiche_string($tab);
}
catch (Exception $e) // On va attraper les exceptions "Exception" s'il y en a une qui est levée
{
  echo 'Une exception a été lancée. Message d\'erreur : ', $e->getMessage();
}
