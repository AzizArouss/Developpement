<?php
class User{
	protected $idusers;
	protected $pseudo;
	protected $prenom;
	protected $nom;
	protected $mail;
	protected $mobile;
	protected $pass=[];
	protected $date_crea;
	protected $boutton;

	function __construct($post = null){
		if ($post !== null){
			$this->set_table_user($post);
		}
	}

	function get_table_vide(){
		$user=[];
		foreach ($this as $key => $value) {
			$this->$key = '';
			$f = 'get_'.$key;
			$user[$key] = $this->$f();
		 } 
		 return $user;
	}
	function get_table_user(){
		$user=[];
		foreach ($this as $key => $value) {
			$f = 'get_'.$key;
			$user[$key] = $this->$f();
		 } 
		 return $user;
	}
	function set_table_user($post){
		foreach ($post as $key => $val) {
			$f = 'set_'.$key;
			$this->$f($val);
		 } 
	}

	// getters
	function get_idusers(){
		return $this->idusers;
	}
	function get_pseudo(){
		return $this->pseudo;
	}
	function get_prenom(){
		return $this->prenom;
	}
	function get_nom(){
		return $this->nom;
	}
	function get_mail(){
		return $this->mail;
	}
	function get_mobile(){
		return $this->mobile;
	}
	function get_pass(){
		return $this->pass;
	}
	function get_date_crea(){
		return $this->date_crea;
	}
	function get_boutton(){
		return $this->date_crea;
	}

	// setters
	function set_idusers($val){
		$this->idusers = $val;
	}
	function set_pseudo($val){
		$this->pseudo = $val;
	}
	function set_prenom($val){
		$this->prenom = $val;
	}
	function set_nom($val){
		$this->nom = $val;
	}
	function set_mail($val){
		$this->mail = $val;
	}
	function set_mobile($val){
		$this->mobile = $val;
	}
	function set_pass($val){
		$this->pass = $val[0];
	}
	function set_date_crea($val){
		$this->date_crea = $val;
	}
	function set_boutton($val){
		$this->boutton = $val;
	}
}