<?php
class Show_post{
	protected $pdo;
	protected $id;


	function __construct($pdo, $id){
		$this->pdo = $pdo;
		$this->id = $pdo;
	}

	function verifQuery($get){
	    if(!array_key_exists('id', $get) OR !ctype_digit($get['id']))
	    {
	   		$erreur['bool'] = false;
	   		$erreur['type'] = 'erreur=nikey_nidigit';
	    }else{
	    	$erreur["bool"] = true;
	    }
        return $erreur;
	}

	function schowPost (){
   		// Récupération d'un article du blog.
	    $query =
	    '
	        SELECT
	            Post.Id,
	            Title,
	            Contents,
	            CreationTimestamp,
	            FirstName,
	            LastName
	        FROM
	            Post
	        INNER JOIN
	            Author
	        ON
	            Post.Author_Id = Author.Id
	        WHERE
	            Post.Id = ?
	    ';
	    $resultSet = $this->pdo->prepare($query);
	    $resultSet->execute([$_GET['id']]);
	    return $resultSet->fetch();
	    // $post = $resultSet->fetch();

	}

	function commentsPost(){
	    $query =
	    '
	        SELECT
	            NickName,
	            Contents,
	            CreationTimestamp
	        FROM
	            Comment
	        WHERE
	            Post_Id = ?
	    ';
	    $resultSet = $this->pdo->prepare($query);
	    $resultSet->execute([$_GET['id']]);
	    return $resultSet->fetchAll();
	    // $comments = $resultSet->fetchAll();
	}
}