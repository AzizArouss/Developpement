<?php
include 'abstract/abstract.class.php';

$fromages = new Fromages('Munster', 1, 17, 72);
$boissons = new Boissons('Coca', 6, 2, 12, Boissons::BOISSON_GAZEUSE);
$dessin = new Dessine();


include 'index.phtml';