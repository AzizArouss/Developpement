<?php

Class Rectangle{
	private $_x;
	private $_y;

	private $_L = "10";
	private $_l = "25";

	private $_width;
	private $_height;
	private $_position;

	//Fonction qui retourne la largeur du rectangle
	public function set_Large(){
		return $this -> _Large;
	}

	//Fonction qui retourne la longueur du rectangle
	public function set_long(){
		return $this -> _long;
	}

	//Fonction pour obtenir le perimetre
	public function get_p(){
		return ($this -> _L + $this -> _l) * 2;
	}

	//Fonction pour obtenir l'aire du rectangle
	public function get_a(){
		return ($this -> _L * $this -> _l);
	}

	public function setSize($width, $height){
		$this -> _width = $width;
		$this -> _height = $height;
	}
}

?>
