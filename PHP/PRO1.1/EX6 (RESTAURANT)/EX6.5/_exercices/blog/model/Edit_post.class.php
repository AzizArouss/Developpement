<?php
class Edit_post{
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

    function edit_post(){
    //  Récupération d'un article du blog.
        $query =
        '
            SELECT
                Id,
                Title,
                Contents
            FROM
                Post
            WHERE
                Id = ?
        ';
        $resultSet = $this->pdo->prepare($query);
        $resultSet->execute([$_GET['id']]);
        return $resultSet->fetch();
        // $post = $resultSet->fetch();
    }

    function update_post($post){
        $query =
        '
            UPDATE
                Post
            SET
                Title = ?,
                Contents = ?
            WHERE
                Id = ?
        ';
        $resultSet = $this->pdo->prepare($query);
        $resultSet->execute([$post['title'], $post['contents'], $post['postId']]);

        // Retour au panneau d'administration.
        header('Location: index.php?page=edit_post&id='.$post['postId']);
        exit();

    }




}

    // if(empty($_POST))
    // {
    //     // Validation de la query string dans l'URL.
    //     if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
    //     {
    //         header('Location: index.php');
    //         exit();
    //     }




