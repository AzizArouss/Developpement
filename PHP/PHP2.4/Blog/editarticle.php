<?php

var_dump($_GET);
$id_post=isset($_GET['id_post']) ? $_GET['id_post'] : false;
if ($id_post==false) {
	header('Location:index.php');
	exit();
};

$serveur = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';
$pdo = new PDO('mysql:host='.$serveur.';dbname='.$db, $user, $pass);

$requete = "SELECT *, Post.Id id_post, Author.Id Author_id, Category.Id Category_id
FROM `Post`
INNER JOIN `Author` ON Author.Id = Post.Author_id
INNER JOIN `Category` ON Category.Id = Post.Category_id
WHERE Post.Id = '$id_post'";

var_dump($requete);
$query = $pdo -> prepare($requete);
$query -> execute();
$adrequete = $query -> fetch(PDO::FETCH_ASSOC);
var_dump($adrequete);

include_once('editarticle.phtml');