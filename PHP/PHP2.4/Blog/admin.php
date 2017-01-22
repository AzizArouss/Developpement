<?php

$server = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES UTF8');

$requete = "SELECT Post.Id,Title,Contents,FirstName,LastName,Name
FROM `Post`
INNER JOIN Author ON Author.Id = Post.Author_id
INNER JOIN Category ON Category.Id = Post.Category_id";

$query = $pdo -> prepare($requete);
$query -> execute();
$admart = $query -> fetchALL(PDO::FETCH_ASSOC);
var_dump($admart);

include_once("admin.phtml");

?>