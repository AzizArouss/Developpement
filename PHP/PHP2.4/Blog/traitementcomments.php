<?php

var_dump($_POST);
$Pseudo = isset($_POST['Pseudo']) ? $_POST['Pseudo'] : false;
$Contenu = isset($_POST['Contenu']) ? $_POST['Contenu'] : false;

$server = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo->exec('SET NAMES UTF8');

$requete = "INSERT INTO `Comment` (`NickName`, `Contents`) VALUES('$Pseudo','$Contenu')";
var_dump($requete);
$query = $pdo -> prepare($requete);
$query -> execute();

?>

