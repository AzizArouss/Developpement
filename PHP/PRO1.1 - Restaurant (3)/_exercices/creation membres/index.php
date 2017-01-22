<?php
session_start();
$_SESSION['user']['session']['idusers']='';
// session_destroy();
// $GLOBALS = [];
echo '<pre>';
// var_dump(array("script" => __FILE__, "ligne" => __LINE__, $_POST));

// echo 'post<br>';
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SESSION);
// var_dump($GLOBALS);
// var_dump($_FILES);

// ON DEFINIT DES CHEMIN POUR ACCEDER A NOS DOSSIERS
define('BLOG', 'ok');
define ('PATH_MODEL',realpath((__DIR__)).'/model');
define ('PATH_VUE',realpath((__DIR__)).'/vue');
define ('PATH_CONTROLLER',realpath((__DIR__)).'/controller');
define ('PATH_APP',realpath((__DIR__)).'/application');

// on charge le fichier de fonctions
include_once(PATH_APP.'/fonctions.php');

// on charge l'autoload de class
// on n'oublie pas de modifier le chemin d'accès aux class
include_once(PATH_APP.'/Autoloader.class.php');
Autoloader::autoloading();

// ON INSTANCIE LA bdd
// include_once(PATH_APP.'/bdd_connection.php');
include_once(PATH_APP.'/Connect.class.php');
$BDD = new Connect();
// $pdo = $BDD->BDD;

// if (!empty($_POST)){
//     $_GET['page'] = 'connexion';
// }


// si la page n'existe pas on redirige vers connexion
$pages = isset($_GET['page']) ? $_GET['page'] : 'connexion';

// si il y a un user en session alors
$pageExist = true;
switch ($pages){
    case 'new_account':
        $page='new_account';
        break;

    case 'schow_account':
        $page='schow_account';
        break;

    case 'add_user':
        $page='add_user';
        break;

    case 'connexion':
        $page='connexion';
        break;

    case 'user_exists':
        $page='show_account';
        break;

    case 'modifier':
        $page='modifier';
        break;

    case 'deconnect':
        $page='deconnect';
        break;

    default:
        $page='connexion';
        $pageExist = false;
}

// vérification supplémentaires
// si la page deamndée n'existe pas et il y a un id en session
// alors on redirige sur schow_account
// $page = ($pageExist == false and $_SESSION['user']['session']['idusers']) ? 'schow_account' : $page;
if ($pageExist == false and $_SESSION['user']['session']['idusers']){
    header('location: index.php?page=schow_account');
}
// echo __LINE__.'/ '.$page.'<br>';



// echo __LINE__.'/ '.$page.'<br>';
// ON ENVOIE SUR LE CONTROLLER DE ACCEUIL
include_once(PATH_CONTROLLER.'/'.$page.'.control.php');
