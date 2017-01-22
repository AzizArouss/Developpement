<?php
// on enregistre les modifications du formulaire
$tab = empty($_POST) ? $_SESSION['user']['session'] : $_POST;
$form = new User($tab);
$saveForm = $form->save_form();

var_dump(array("script" => __FILE__, "ligne" => __LINE__, $GLOBALS['testvar']));


// si la requete est ok on injecte les valeurs du formulaire dans la session
if ($saveForm == true){
	$_SESSION['user']['form'] = $form->get_form();
}

// on enregistre les info de fichiers
if (($file = $form->file_upload()) != false AND isset($_FILES['portrait'])){
	$_SESSION['user']['form']['file'] = $file;
};