<?php

	function charge_class($class){
		include_once 'class/'.$class.'.class.php';
	}
	spl_autoload_register('charge_class');
	$Sympa = new Sympa();
	echo $Sympa -> a();

		include_once 'class/Autoloader.class.php';
		Autoloader :: autoloading();
?>