<?php
$nomClass = ucfirst(strtolower($page));
// include_once(PATH_MODEL.'/'.$nomClass.'.class.php');
$class = new $nomClass($pdo, $id);

$erreur = $class->verifQuery($_GET);

if ($erreur['bool'] == false) {
    header('location:  index.php?page=admin');
}
 
$post = $class->schowPost();
if ($post === false){
    header('Location: index.php?erreur=pas_de_resultat'); 
    exit();
}
$comments = $class->commentsPost();
