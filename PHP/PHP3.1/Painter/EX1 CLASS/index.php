<?php

include_once("personnage.class.php");
include_once("rectangle.class.php");
include_once("triangle.class.php");
include_once("carre.class.php");

$perso = new Personnage();
$rect = new Rectangle();
$tri = new Triangle();
$car = new Carre();

$car -> setSize(10);
//$car -> get_pr();

//$perso -> parler();
//$perso -> fermer();
//$perso -> age = 100;

include("index.phtml");

?>