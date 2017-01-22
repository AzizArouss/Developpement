<?php
class Autoloader {
	CONST PATH_MODEL = 'model';

	static function charge_class($class) {
		include_once(self::PATH_MODEL."/$class.class.php");
	}
	static function autoloading() {
		spl_autoload_register([__CLASS__, 'charge_class']);
	}
}