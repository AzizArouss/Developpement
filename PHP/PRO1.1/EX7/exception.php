<?php

	function inverse($a){
		if ($a == 0 || !is_numeric($a)){
			throw new Exception("$a = 0 est un caractere");
		}
		return 1/$a;
	}
	echo inverse(5).'<br>';

	function addition($a, $b){
		return $a+$b;
	}
	echo addition(2,3).'<br>';

	try {
		echo inverse(2).'<br>';
		echo inverse(0).'<br>';	
	}

	catch (Exception $e){
	echo $e -> getMessage();
	}

?>