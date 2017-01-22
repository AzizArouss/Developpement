<?php

$orderNumber = isset($_GET['orderNumber']) ? $_GET['orderNumber'] : false;

$server = 'localhost';
$db = 'classicmodels';
$user = 'root';
$pass = 'troiswa';

$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
$pdo -> exec('SET NAMES UTF8');

$requete = "SELECT customers.customerName, customers.contactFirstName, customers.contactLastName, customers.addressLine1, customers.city 
FROM `customers`
INNER JOIN `orders` ON orders.customerNumber = customers.customerNumber
WHERE orders.orderNumber = $orderNumber";

$query = $pdo -> prepare($requete);
$query -> execute();
$infos_client = $query -> fetch(PDO::FETCH_ASSOC);

$requete = "SELECT productName, priceEach, quantityOrdered, priceEach * quantityOrdered AS prixTotal
FROM orderdetails
INNER JOIN products ON orderdetails.productCode = products.productCode
WHERE orderNumber = $orderNumber";

$query = $pdo -> prepare($requete);
$query -> execute();
$infos_commande = $query -> fetchAll(PDO::FETCH_ASSOC);

$requete = "SELECT SUM(orderdetails.priceEach * orderdetails.quantityOrdered) AS TOTAL, SUM(orderdetails.priceEach * orderdetails.quantityOrdered * 0.20) AS TVA, SUM(orderdetails.priceEach * orderdetails.quantityOrdered * 1.20) AS  TTC
FROM `orderdetails`
WHERE orderdetails.orderNumber = $orderNumber";

$query = $pdo -> prepare($requete);
$query -> execute();
$infos_facture = $query -> fetchAll(PDO::FETCH_ASSOC);

include_once('commande.phtml');

?>