<?php
class User{
	protected $idusers;
	protected $pseudo;
	protected $prenom;
	protected $nom;
	protected $mail;
	protected $mobile;
	protected $pass;
	protected $date_crea;
	protected $boutton;
	protected $form;
	protected $avatar;

	function __construct($post = null){
		if ($post !== null AND !empty($post)){

			$this->set_table_user($post);
			$this->form = $post;
		}else{
			$this->set_table_vide();
		}
	}

	function set_table_vide(){
		foreach ($this as $key => $val) {
				$f = 'set_'.$key;
				// $this->$key = '';
				$this->$f('');
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

	// function connect_user($post){
	// 	$this->pseudo = $post['pseudo'];
	// 	$this->pass = $post['pass'];
	// }

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
	function get_form(){
		return $this->form;
	}
	function get_avatar(){
		return $this->avatar;
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
		if (is_array($val)){
			$this->pass = $val[0];
		}else{
			$this->pass = $val;
		}
	}
	function set_date_crea($val){
		$this->date_crea = $val;
	}
	function set_boutton($val){
		$this->boutton = $val;
	}
	function set_form($val){
		$this->form = $val;
	}
	function set_avatar($val){
		$this->avatar = $val;
	}

	// requetes de fonctionnement du user
	function save_form(){
		$pdo = new Connect();

		// save sans mot de passe
		if (empty($this->pass)) {
			$cols =['pseudo','prenom','nom', 'mail','mobile', 'idusers'];
			$query = "UPDATE users SET
						  pseudo = :pseudo,
						  nom = :nom,
						  prenom = :prenom,
						  mail = :mail,
						  mobile = :mobile
					   WHERE idusers = :idusers";
			$entry = $pdo->BDD->prepare($query);

			$setValues = $this->constitue_set_values($cols);
		}else{
			// il y a un mot de passe
			$cols =['pseudo','prenom','nom', 'mail','mobile', 'idusers', 'pass'];
			$query = "UPDATE users SET
						  pseudo = :pseudo,
						  nom = :nom,
						  prenom = :prenom,
						  mail = :mail,
						  mobile = :mobile,
						  pass = :pass
					   WHERE idusers = :idusers";
			$entry = $pdo->BDD->prepare($query);

			$setValues = $this->constitue_set_values($cols);
		}


		// save avec mot de passe modifiée

		$GLOBALS['testvar'] = 'tutut';

		return $entry->execute($setValues);
		
	}

	private function constitue_set_values($cols ){
		$setValues = [];
		foreach ($this as $key => $value) {
			// on ne prend que les  valeurs des colonnes concernées
			if (in_array($key, $cols)){
				if ($key == 'pass' and is_array($this->pass)){
					$setValues[':'.$key] = $value[0];
				}else{
					$setValues[':'.$key] = $value;
				}
			}
		}

		return $setValues;
	}


	function file_upload(){
		$file = $_FILES;
		$pathTemp = $file['portrait']['tmp_name'];
		if (!file_exists(PATH_VUE.'/files/'.$this->idusers)){
			mkdir(PATH_VUE.'/files/'.$this->idusers, 0777, true);
		}
		$pathDir = PATH_VUE.'/files/'.$this->idusers.'/';
		$name = $file['portrait']['name'];

		if (!move_uploaded_file($pathTemp, $pathDir.$name)){
			echo 'Image pas transféré';
			return false;
		}

		$this->file = $name;
		if($this->save_upload_file() != false){
			return $name;
		}else{
			return false;
		}

	}

	function save_upload_file(){
		$pdo = new Connect();

		$query = "UPDATE users SET
			  avatar = :avatar
		   WHERE idusers = :idusers";
		$entry = $pdo->BDD->prepare($query);
		$setValues = [':avatar'=>$this->file, ':idusers'=>$this->idusers];

		return $entry->execute($setValues);
	}

	function get_user_infos(){
		$pdo = new Connect();

		$query = "SELECT * FROM users WHERE idusers= :idusers";
		$entry = $pdo->BDD->prepare($query);
		$setValues = [':idusers'=>$this->idusers];
		$entry->execute($setValues);
		if (($result = $entry->fetch(PDO::FETCH_ASSOC)) != false){
			$this->set_table_user($result);
			$return = true;
		}else{
			$return = false;
		}

		// on variabilise les propriétées
		$this->indices_en_variables();

		return $return;
	}

	function indices_en_variables(){
		foreach ($this as $key => $value) {
			$GLOBALS[$key] = $value;
		}
	}

}