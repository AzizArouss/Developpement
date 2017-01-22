<?php
$serveur = 'localhost';
$db = 'classicmodels';
$user = 'root';
$pass = 'troiswa';
$pdo = new PDO('mysql:host='.$serveur.';dbname='.$db, $user, $pass);

$requete = "SELECT orderNumber, orderDate, shippedDate, status FROM orders ORDER By orderNumber";

$query = $pdo -> prepare($requete);
$query -> execute();
$tab = $query -> fetchAll(PDO::FETCH_ASSOC);

include_once('template.phtml');
?>