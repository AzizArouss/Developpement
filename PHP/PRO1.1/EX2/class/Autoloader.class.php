<?php

	class Autoloader {
		static function charge_class($class){
			include_once 'class/'.$class.'.class.php';
		}

		static function autoloading(){
			spl_autoload_register([__CLASS__,'charge_class']);
		}
	}

?>