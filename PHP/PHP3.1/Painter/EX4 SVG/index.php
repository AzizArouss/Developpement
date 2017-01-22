<?php
	include_once('abstract.class.php');
	$fromages = new Fromages('munster',2,17,172);
	$boissons = new Boissons('coca',1,7,6,0.75,Boissons::BOISSON_GAZEUSE);
	var_dump($fromages);
	var_dump($boissons);

	include_once('index.phtml');
?>