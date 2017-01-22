<?php
class Connection extends User{
	function user_exists(User $user){
		$pdo = new Connect();

		$query = "SELECT * FROM users WHERE pseudo = :pseudo AND pass = :pass";
		$info = $pdo->BDD->prepare($query);
		$quoi = $info->execute(array(':pseudo' => $user->pseudo, ':pass' => $user->pass));
		$result = $info->fetch(PDO::FETCH_ASSOC);

		return $result;
	}
}