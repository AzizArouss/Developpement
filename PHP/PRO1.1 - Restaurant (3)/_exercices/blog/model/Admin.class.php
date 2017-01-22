<?php
class Admin{
	private $pdo;

	function __construct($pdo){
		$this->pdo = $pdo;
	}

	function adminShowPosts(){
		$query =
		'
		    SELECT
		        Post.Id,
		        Title,
		        Contents,
		        CreationTimestamp,
		        FirstName,
		        LastName,
		        Category.Name AS Category_Name
		    FROM
		        Post
		    INNER JOIN
		        Author
		    ON
		        Post.Author_Id = Author.Id
		    INNER JOIN
		        Category
		    ON
		        Post.Category_Id = Category.Id
		    ORDER BY
		        CreationTimestamp DESC
		';
		$resultSet = $this->pdo->query($query);
		return $resultSet->fetchAll();
	}


}
