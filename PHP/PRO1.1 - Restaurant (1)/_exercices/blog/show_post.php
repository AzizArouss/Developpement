<?php
    // commentire de franck
    // faire un isset avec valeur par défaut si n'existe pas ou renvoie sur la page index.php

    //et si

    // valeur inexistante, renvoyer sur la page index aussi
    // valeur sera inexistance si la requete renvoie un rien en retour de la requete

    // var_dump(ctype_digit($_GET['id']));
    // exit()-1

    // $id = isset($_GET['id']) ? $_GET['id'] : false;


    // Validation de la query string dans l'URL.
    if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
    {
        header('Location: index.php?erreur=nikey_nidigit');
        exit();
    }

    include 'application/bdd_connection.php';

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
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id']]);
    $post = $resultSet->fetch();


    // Récupération de tous les commentaires de l'article du blog.
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
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id']]);
    $comments = $resultSet->fetchAll();

    // avant d'afficher le template on vérifie qu'il y a bien un post qui existe à ce numéro
    // var_dump($post);


    // vérifie si pas de résultat alors retour à index.php
    if ($post === false){
        header('Location: index.php?erreur=pas_de_resultat'); 
        exit();
    }

    // Sélection et affichage du template PHTML.
    $template = 'show_post';
    include 'layout.phtml';
