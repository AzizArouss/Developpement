<?php
    // ON DEFINIT DES CHEMIN POUR ACCEDER A NOS DOSSIERS
    define('BLOG', 'ok');
    define ('PATH_MODEL',realpath((__DIR__)).'/model');
    define ('PATH_VUE',realpath((__DIR__)).'/vue');
    define ('PATH_CONTROLLER',realpath((__DIR__)).'/controller');
    define ('PATH_APP',realpath((__DIR__)).'/application');

    // ON INSTANCIE LA bdd
    include_once(PATH_APP.'/bdd_connection.php');


    $pages = isset($_GET['page']) ? $_GET['page'] : 'accueil';
    switch ($pages){
        case 'admin':
            $page='admin';
            break;

        default:
            $page='accueil';
    }


    // ON ENVOIE SUR LE CONTROLLER DE ACCEUIL
    include_once(PATH_CONTROLLER.'/blog.php');
