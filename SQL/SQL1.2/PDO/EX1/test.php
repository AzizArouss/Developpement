<?php

$serveur = 'localhost';
$db = 'classicmodels';
$user = 'root';
$pass = 'troiswa';
$ville = 'Nantes';

$pdo = new PDO('mysql:host='.$serveur.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES utf8');
var_dump($pdo);

$requete = "SELECT * FROM customers";
$query = $pdo -> prepare($requete);
$query -> execute();
$tab = $query -> fetchAll(PDO::FETCH_ASSOC);
var_dump($tab);

$query2 = $pdo -> prepare($requete);
$query2 -> execute();
$tab2 = $query2 -> fetch(PDO::FETCH_ASSOC);
var_dump($tab2);

$requete = "SELECT * FROM customers WHERE city = 'Nantes'";
$query3 = $pdo -> prepare($requete);
$query3 -> execute();
$tab3 = $query3 -> fetchAll(PDO::FETCH_ASSOC);
var_dump($tab3);

$requete = "SELECT * FROM customers WHERE city = '$ville'";
$requete = "SELECT * FROM customers WHERE city = ?";
$query4 = $pdo -> prepare($requete);
$query4 -> execute(array($ville));
$tab4 = $query4 -> fetchAll(PDO::FETCH_ASSOC);
var_dump($tab4);

?>