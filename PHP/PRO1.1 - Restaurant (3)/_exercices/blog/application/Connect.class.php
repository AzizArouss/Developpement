<?php
// Class connection à la base de donnée
Class Connect{

	public $BDD;
	function __construct($host='localhost', $dbname='blog', $user='root', $pass='troiswa'){


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

}

