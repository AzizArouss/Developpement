<?php
 // Récupération de tous les articles du blog classés par ordre antéchronologique.
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
    $resultSet = $pdo->query($query);
    $posts = $resultSet->fetchAll();
