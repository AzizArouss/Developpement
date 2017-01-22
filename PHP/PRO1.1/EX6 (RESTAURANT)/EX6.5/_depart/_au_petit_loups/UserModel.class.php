<?php
class UserModel
{
    public function signUp($lastName, $firstName, $email){
        // en premier on ne fait qu'enregistrer les info récupérées en POST
        // on effectue la connexion à la base de données
        $database = new Database();

        // On vérifie qu'il y a un utilisateur avec l'adresse e-mail spécifiée.
        $query = "SELECT Id FROM User WHERE Email = ?";
        $user = $database->queryOne($query, [ $email ]);

        // le mail du user existe t il déjà ?
        if(empty($user) == false)
        {
            // utilisation de throw new et DomainException
            // throw new -> génère une erreur enregistré dans DomainException
            throw new DomainException
            (
                "Il existe déjà un compte utilisateur avec cette adresse e-mail"
            );
        }

        $sql = "INSERT INTO User
		(
			LastName,
			FirstName,
			Email,
			CreationTimestamp
		) VALUES (?, ?, ?, NOW())";

        $database->executeSql($sql, [$lastName, $firstName, $email]);
    }


}
