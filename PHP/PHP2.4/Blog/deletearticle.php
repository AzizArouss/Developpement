<?php

var_dump($_GET);
$id_post = isset($_GET['id_post']) ? $_GET['id_post'] : false;

$server = 'localhost';
$db = 'db_blog';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES UTF8');

$requete = "DELETE FROM `Post`
WHERE Id = '$id_post'";
var_dump($requete);

$query = $pdo -> prepare($requete);
$query -> execute();

header('Location: admin.php');

?>