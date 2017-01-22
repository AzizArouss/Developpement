<?php
// echo '<pre>';
$user = new User($_POST);
$Add_user = new Add_user($BDD->BDD);
$Add_user->create_user($user);



// on transforme les noms de colonnes en variable
// En option quand on ne crée pas le user mais pour l'updaate
// ou l'affichge des valeurs des champs de colonnes
// afin que les valeurs des colonnes s'affichent
foreach ($user->get_table_user() as $key => $value) {
	${$key}=$value;
}
// on crée des variables pour chaque nom de colonne de la table
// echo '</pre>';
$page = 'schow_account';
include (PATH_VUE.'/layout.phtml');
