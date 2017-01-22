<?php

	// include_once('class/Autoloader.class.php');
	// Autoloader :: autoloading();
	// $BDD = new Connect();

	// Class Connect{
	// 	private $BDD;
	// 	function __construct($host='localhost', $dbname='db_blog', $user='root', $pass='troiswa'){
		
	// 		$this -> BDD = new PDO
	// 					(
	// 						'mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',
	// 						$user,
	// 						$pass,
	// 					    [
	// 					    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	// 					        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	// 					    ]
	// 					);

	// 	}
	// }

	include_once('class/Autoloader.class.php');
	Autoloader::autoloading();

	$i = new Conect();
	$BDD = $i -> BDD;
	$result = $BDD -> prepare('select * form Author');
	$result -> execute();
	$author = $result -> fetchAll();
	var_dump($author);

?>
