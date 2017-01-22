<?php

$user = new User();

// on transforme les noms de colonnes en variable
indice_en_variable($user->get_table_vide());
// foreach ($user->get_table_vide() as $key => $value) {
// 	${$key}=$value;
// }
