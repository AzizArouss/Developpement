<?php

var_dump($_POST);
$Titre = isset($_POST['Titre']) ? $_POST['Titre'] : false;
$Article = isset($_POST['Article']) ? $_POST['Article'] : false;
$Auteur = isset($_POST['Auteur']) ? $_POST['Auteur'] : false;
$Categories = isset($_POST['Categorie']) ? $_POST['Categorie'] : false;

$server = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES UTF8');

$requete = "INSERT INTO `Post` (`Title`, `Contents`, `Author_Id`, `Category_Id`) VALUES('$Titre','$Article','$Auteur','$Categories')";
$query = $pdo -> prepare($requete);
$query -> execute();
var_dump($requete);

?>
