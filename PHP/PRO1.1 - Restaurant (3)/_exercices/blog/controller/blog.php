<?php
// vérifie l origine de la demande du script
// si BLOG non défini on renvoie sur la page index
$path = '../';
if (defined('BLOG')==false) header('location: '.$path.'index.php?page=pasbon');

// renvoi sur le model de Accueil
include_once(PATH_MODEL.'/'.$page.'.php');

// apès l'exé de model on envoi les infos de la requete sur le template
// on défini le soius template de notre page
$template = $page;
include PATH_VUE.'/layout.phtml';
