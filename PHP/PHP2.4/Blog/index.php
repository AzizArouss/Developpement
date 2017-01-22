<?php

$serveur = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';
$pdo = new PDO('mysql:host='.$serveur.';dbname='.$db, $user, $pass);

// $requete = "SELECT Title, Contents, CreationTimestamp
// FROM `Post`";

// $query = $pdo -> prepare($requete);
// $query -> execute();
// $article = $query -> fetchAll(PDO::FETCH_ASSOC);
// var_dump($article);

$requete = "SELECT *
FROM `Post`
INNER JOIN Author ON Author.Id = Post.Author_id
INNER JOIN Category ON Category.Id = Post.Category_id";
$query = $pdo -> prepare($requete);
$query -> execute();
$adrequete = $query -> fetchALL(PDO::FETCH_ASSOC);
var_dump($adrequete);

include_once('template.phtml');

?>
