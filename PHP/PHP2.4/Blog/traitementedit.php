<?php

var_dump($_POST);
$id_post=isset($_POST['id_post']) ? $_POST['id_post'] : false;
$Titre=isset($_POST['Titre']) ? $_POST['Titre'] : false;
$Article=isset($_POST['Article']) ? $_POST['Article'] : false;
$Auteur=isset($_POST['Auteur']) ? $_POST['Auteur'] : false;
$Categorie=isset($_POST['Categorie']) ? $_POST['Categorie'] : false;

$server='localhost';
$db='db_blog';
$user='root';
$pass='troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo->exec('SET NAMES UTF8');

$requete="UPDATE  `Post`
SET Title = '$Titre',
	Contents = '$Article',
	Author_Id = '$Auteur',
	Category_Id = '$Categorie'
WHERE Post.Id = '$id_post';";
var_dump($requete);
$query=$pdo->prepare($requete);
$query->execute();


header('Location:admin.php');
exit();