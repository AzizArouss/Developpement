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
    // $pdo = $BDD->BDD;

    if (!empty($_POST)){
        $_GET['page'] = 'add_user';
    }
    $pages = isset($_GET['page']) ? $_GET['page'] : 'new_account';
    switch ($pages){
        case 'new_account':
            $page='new_account';
            break;

        case 'show_account':
            $page='show_account';
            break;

        case 'add_user':
            $page='add_user';
            break;

        default:
            $page='new_account';
    }
    // ON ENVOIE SUR LE CONTROLLER DE ACCEUIL
    include_once(PATH_CONTROLLER.'/'.$page.'.control.php');
