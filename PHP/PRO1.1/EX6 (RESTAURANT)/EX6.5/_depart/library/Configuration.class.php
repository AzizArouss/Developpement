<?php


class Configuration
{
	private static $registry;


	public function __construct()
	{

		if(Configuration::$registry === null)
		{
			Configuration::$registry = array();
//echo '<pre>';
//var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'Configuration::$registry: ', Configuration::$registry));
//echo '</pre>';
		}
	}

	public function get($filename, $key, $defaultValue = null)
	{
// echo '<pre>';
// var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'filename:'=> $filename, 'key:'=> $key, 'defaultValue:'=> $defaultValue));
// debug_print_backtrace();
// echo '</pre>';
// echo '<pre>';
// var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'Configuration::registry'=> Configuration::$registry));
// debug_print_backtrace();
// echo '</pre>';
		if(array_key_exists($filename, Configuration::$registry) === true)
		{
			if(array_key_exists($key, Configuration::$registry[$filename]) === true)
			{
				return Configuration::$registry[$filename][$key];
			}
		}

		return $defaultValue;
	}

	public function load($filename)
	{
		require_once CFG_PATH."/$filename.php";

		Configuration::$registry[$filename] = $config;
	}
}