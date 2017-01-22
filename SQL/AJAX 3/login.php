<?php
	$serveur = 'localhost';
	$db = 'db_restaurant';
	$user = 'root';
	$pass='troiswa';


	$pdo = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
	$pdo->exec('SET NAMES UTF8');

	$requete = "SELECT * FROM connexion WHERE login = '$_POST[login]' AND pass = '$_POST[pass]'";
	$query=$pdo->prepare($requete);
	$query->execute();
	$membre=$query->fetch(PDO::FETCH_ASSOC);


	if(($_POST["login"]==$membre["login"])&&($_POST["pass"]==$membre["pass"]))
		{	
		echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
	}
	else 
	{
		echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
	}
?>