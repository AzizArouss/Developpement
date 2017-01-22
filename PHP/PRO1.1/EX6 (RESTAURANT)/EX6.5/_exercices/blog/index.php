<?php
    // ON DEFINIT DES CHEMIN POUR ACCEDER A NOS DOSSIERS
    define('BLOG', 'ok');
    define ('PATH_MODEL',realpath((__DIR__)).'/model');
    define ('PATH_VUE',realpath((__DIR__)).'/vue');
    define ('PATH_CONTROLLER',realpath((__DIR__)).'/controller');
    define ('PATH_APP',realpath((__DIR__)).'/application');

    // on charge l'autoload de class
    // on n'oublie pas de modifier le chemin d'accès aux class
    include_once(PATH_APP.'/Autoloader.class.php');
    Autoloader::autoloading();

    // ON INSTANCIE LA bdd
    // include_once(PATH_APP.'/bdd_connection.php');
    include_once(PATH_APP.'/Connect.class.php');
    $BDD = new Connect();
    $pdo = $BDD->BDD;


    $pages = isset($_GET['page']) ? $_GET['page'] : 'accueil';
    $id = isset($_GET['id']) ? $_GET['id'] : 1;

    switch ($pages){
        case 'admin':
            $page='admin';
            break;

        case 'edit_post':
            $page='edit_post';
            break;

        case 'show_post':
            $page='show_post';
            break;

        default:
            $page='accueil';
    }

    // echo '$page: '.$page.' - $id: '.$id.'<br>';

    // ON ENVOIE SUR LE CONTROLLER DE ACCEUIL
    include_once(PATH_CONTROLLER.'/blog.php');
