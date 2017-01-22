<?php
function indice_en_variable($tab, $pre=''){
	if (!is_array($tab) OR empty($tab)) return $tab;
	$pre = ($pre =='') ? '' : $pre.'_';
	foreach ($tab as $key => $value) {
		global ${$pre.$key};
		if ($key == 'pass' and is_array($value)){
			${$pre.$key} = $value[0];
		}else{
			${$pre.$key} = $value;
		}
	}
	// echo '****************************************<br>';
}

function indice_unset($tab){
	$indices = explode('-', $tab);
	var_dump($indices);
	if (!is_array($tab) OR empty($tab)) return $tab;
	foreach ($tab as $key => $value) {
		$tab[$key] = null;
	}
}