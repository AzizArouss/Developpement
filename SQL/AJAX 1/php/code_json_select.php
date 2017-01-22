<?php

$tab = [
	["prenom" => "Aziz4", "nom" => "Arouss4"],
	["prenom" => "Aziz5", "nom" => "Arouss5"],
	["prenom" => "Aziz6", "nom" => "Arouss6"],
];

echo json_encode($tab[$_GET["index"]]);
?>