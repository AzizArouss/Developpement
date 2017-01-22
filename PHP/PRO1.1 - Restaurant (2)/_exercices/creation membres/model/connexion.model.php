<?php
// on instancie un nouveau user avec les infos du formulaire login
// soit il est vide et on a des des propriétés vides
// soit il y a es infos de log
$user = new User($_POST);
indice_en_variable($user->get_table_user());

// connection à la BDD
$connection = new Connection($BDD->BDD);

// exit();