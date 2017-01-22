<?php
class Accueil{
	private $pdo;

	function __construct($pdo){
		$this->pdo = $pdo;
	}

	function showAllPosts(){
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
	        ORDER BY
	            CreationTimestamp DESC
	    ';
	    $resultSet = $this->pdo->query($query);
	    return $resultSet->fetchAll();
	    // $posts = $resultSet->fetchAll()
	}



}