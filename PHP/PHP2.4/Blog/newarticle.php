<?php

var_dump($_POST);
$Titre = isset($_POST['Titre']) ? $_POST['Titre'] : false;
$Article = isset($_POST['Article']) ? $_POST['Article'] : false;
$Auteur = isset($_POST['Auteur']) ? $_POST['Auteur'] : false;
$Categories = isset($_POST['Categories']) ? $_POST['Categories'] : false;

$server = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES UTF8');

$requete = "SELECT Name, Id
FROM `Category`";
$query = $pdo -> prepare($requete);
$query -> execute();
$category = $query -> fetchALL(PDO::FETCH_ASSOC);
var_dump($category);

$requete = "SELECT FirstName, LastName, Id
FROM `Author`";
$query = $pdo -> prepare($requete);
$query -> execute();
$author = $query -> fetchALL(PDO::FETCH_ASSOC);
var_dump($author);

include_once('newarticle.phtml');

?>