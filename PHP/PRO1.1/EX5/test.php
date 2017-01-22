<?php

$tab = [index1 => 'val1', index2 => 'val2', index3 => 'val3'];
foreach ($tab as $key => $val) {
	${$key} = $val;
}

echo $index1 -> val1;
echo $index2 -> val2;
echo $index3 -> val3;

?>