<?php
$user = new User();
// on transforme les noms de colonnes en variable
foreach ($user->get_table_vide() as $key => $value) {
	${$key}=$value;
}
