<?php
// Class connection à la base de donnée
Class Connect{
	public $BDD;

	function __construct($host='localhost', $dbname='blogeurs', $user='root', $pass='troiswa'){
		// echo '<pre>';
		if (preg_match("/win/i", $_SERVER['SERVER_SIGNATURE'])) {
			$pass='';
		};
		// echo '</pre>';
		$this->BDD = new PDO
			(
				'mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',
				$user,
				$pass,
			    [
			    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			    ]
            );
	}

	function get_BDD(){
		return $this->BDD;
	}

}

