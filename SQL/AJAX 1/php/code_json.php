<?php

$tableau = [
	1 => "a",
	2 => "b",
	3 => "c",
	4 => "d",
	5 => "e",
];

$tab = [
	["prenom" => "Aziz1", "nom" => "Arouss1"],
	["prenom" => "Aziz2", "nom" => "Arouss2"],
	["prenom" => "Aziz3", "nom" => "Arouss3"],
];

echo json_encode($tab);
?>