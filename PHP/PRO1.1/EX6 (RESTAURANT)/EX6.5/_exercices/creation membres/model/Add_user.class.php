<?php
class Add_user{
	protected $pdo;
	
	function __construct($pdo){
		$this->pdo = $pdo;
	}

	function create_user(User $post){
		$user = $post->get_table_user();

		$query = "INSERT INTO users 
			      (`pseudo`, `prenom`, `nom`, `mail`, `mobile`, `pass`)
			      VALUES
			      (:pseudo, :prenom, :nom, :mail, :mobile, :pass)";
		$req = $this->pdo->prepare($query);
		$req->execute( array(':pseudo' => $user['pseudo'], ':prenom' => $user['prenom'], ':nom' => $user['nom'], ':mail' => $user['mail'], ':mobile' => $user['mobile'], ':pass' => $user['pass']));

	}

}