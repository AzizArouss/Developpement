<?php
header ("content-type : text/html; charset = UTF-8");

$nombre = isset($_GET['nombre'])?$_GET['nombre']:null;
$carre = isset($_GET['carre'])?$_GET['carre']:null;
echo 'nombre = '.$nombre.' et carré = '.$carre;
include ('template.phtml');

echo 'Hello World<br>';
echo 'Ceci fonctionne !<br>';

print_r('Présent !<br>');

$mon_nom = 'Aziz Arouss';
echo 'Mon nom est '.$mon_nom.'<br>';
echo 'Mon nom est $mon_nom<br>';
echo "Mon nom est $mon_nom<br>";

$ma_var = "je l'anime<br>";
echo $ma_var;

$ma_var = 'je l\'anime<br>';
echo $ma_var;

$mon_tab = [];
$mon_tab = ["E25", 'Skorpion', 97];
var_dump($mon_tab);
echo '<pre>';
print_r($mon_tab);
echo '</pre>';
echo 'Mon prénom est : '.$mon_tab[0].'<br>';

$tab_asso = [
	"Prenom" => 'Skorpion',
	"Nom" => 'G',
	"Age" => 23
];
echo 'Le prenom est : '.$tab_asso['Prenom'].'<br>';

$wot = [
	['Prenom' => 'Skorpion', 'Nom' => 'RHM', 'Age' => 23],
	['Prenom' => 'E25', 'Nom' => 'RHM', 'Age' => 22],
];
var_dump($wot);
echo 'Le prenom est : '.$wot[0]['Prenom'].'<br>';

foreach ($wot as $key => $val) {
	var_dump($val);
	echo $val['Prenom'];
}

// CHEAT
/*
if (condition) {
	# code...
};
else if {};
else {};


$tab = []
for ($i = 0; $i < count($tab); $i ++) {
	echo $tab[$i].'<br>';
}


while (cmd) {
	do {
	
	}
	while ();
};
*/

// SANDBOX
$a = array("a" => "pomme", "b" => "banane");
$b = array("a" =>"poire", "b" => "fraise", "c" => "cerise");

$c = $a + $b; // Union de $a et $b
echo "Union de \$a et \$b : \n";
var_dump($c);

$c = $b + $a; // Union de $b et $a
echo "Union de \$b et \$a : \n";
var_dump($c);

// FONCTIONS

include('template.phtml');
include_once('template.phtml');
require('template.phtml');
require_once('template.phtml');
?>