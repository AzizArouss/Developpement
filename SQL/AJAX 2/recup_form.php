<?php

$id_prenom = isset($_POST['prenom']) ? $_POST['prenom'] : false;
$id_nom = isset($_POST['nom']) ? $_POST['nom'] : false;

$serveur = 'localhost';
$db = 'db_restaurant';
$user = 'root';
$pass = 'troiswa';
$pdo = new PDO('mysql:host='.$serveur.';dbname='.$db, $user, $pass);

$requete = "INSERT INTO `users`(`nom`, `prenom`) VALUES (?,?)";

$query = $pdo -> prepare($requete);
$query->execute(array($id_prenom,$id_nom));

var_dump($_POST);