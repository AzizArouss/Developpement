<?php

$server = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES UTF8');

$requete = "SELECT Title, Contents, CreationTimestamp
FROM `Post`";
$query = $pdo -> prepare($requete);
$query -> execute();
$article = $query -> fetch(PDO::FETCH_ASSOC);
var_dump($article);

$requete = "SELECT NickName, Contents
FROM `Comment`";
$query = $pdo -> prepare($requete);
$query -> execute();
$article2 = $query -> fetchALL(PDO::FETCH_ASSOC);
var_dump($article2);

include_once("newcomments.phtml");

?>