<?php

Class Triangle{
	private $_x;
	private $_y;
	
	private $_c = "8";
	private $_H = "6.928";

	//Fonction pour obtenir le perimetre
	public function get_pr(){
		return ($this -> _c) * 3;
	}

	//Fonction pour obtenir l'aire
	public function get_ar(){
		return ($this -> _c * $this -> _H) / 2;
	}
}

?>
