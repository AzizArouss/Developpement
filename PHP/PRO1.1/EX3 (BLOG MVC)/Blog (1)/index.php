<?php

	$_GET['page'].'.php';
	switch ($_GET['page']) {
		case 'admin':
			$page = 'admin';
			break;
		
		default:
			$page = 'acceuil';
			break;
	}

	include 'controleur/blog'.$page.'.php';

?>