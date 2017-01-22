<?php
	var_dump($_GET);
	var_dump($_POST);
	var_dump($_SERVER);

	function carre($arg){
		return $arg * $arg;
	}

	$mon_calcul = carre($_POST['nombre']);
	echo "le carré de $_POST[nombre] = $mon_calcul";

	$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
	$radio = isset($_POST['nombre'])?$_POST['nombre']:null;

	header('Location : index.php?nombre ='.$nombre.'&carre='.$mon_calcul);

?>