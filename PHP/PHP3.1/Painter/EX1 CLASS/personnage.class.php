<?php

Class Personnage{
	private $_prenom = "Aziz";
	private $_nom;
	public $age = "50";
	
	//Faire une fonction random pour afficher l'echo dans le phtml
	public function parler(){
		echo("HUSHBANDU");
	}

	//Faire une fonction random pour afficher l'echo dans le phtml
	public function fermer(){
		echo("Fermer la porte !");
	}
	
	//Obtenir le prénom dans la classe privé plus haut
	public function get_prenom(){
		return $this -> _prenom;
	}
	
	public function set_prenom($prenom){
		$this -> _prenom = $prenom;
	}
}

?>