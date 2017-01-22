<?php

//Utilisation de la fonction date
//function date();
echo date("d");
echo date("m");
echo date("Y");

echo date("Y-m-d");
echo date("Y-m-d G:i:s");

$date = "2016-11-21";
$date_inter = explode('-', $date);
$date_fr = $date_inter[2].'-'.$date_inter[1].$date_inter[0];

$nom = date_create();
var_dump($nom);

echo "<h2>new DateTime()</h2>";
$now = new DateTime();
var_dump($now);

$autre_date = "1997-11-14";
$date = new DateTime($autre_date);
var_dump($date);

//FONCTION FOPEN
echo "<h2>fonction fopen()</h2>";
$file = fopen('index.txt', "a+");
while(true) {
	$ligne = fgets($file);
	if ($ligne == false){
		break;
	} else {
		echo "<p>$ligne : ".$ligne."</p>";
	}
}
	fclose($file);

$file = fopen('index.txt', "a+");
$tab = [];
while(true) {
	$ligne = fgets($file);
		if ($ligne !== false){
			array_push($tab, $ligne);
		} else {
			break;
		}	
	}
	foreach ($tab as $val){
		echo "<p>$val : ".$val."</p>";
	}
	fclose($file);

$file = fopen('index.txt', "wn");
fclose($file);

//FONCTION FPUTS
echo "<h2>fonction fputs()</h2>";
$n_val = ["n1","n2"];
$n_file = fopen('index.txt',"w");
foreach ($n_val as $val) {
	fputs($n_file, $val."\r\n");
	}
	fclose($n_file);

//FONCTION GETCSV
echo "<h2>fonction fgetcsv()</h2>";

$file = fopen("index.csv", "a+");
$tasks = [];

while(true){
	$ligne = fgetcsv($file);
	if($ligne == false){
		break;
	}
	$tasks[] = $ligne;
}
var_dump($tasks);

$ligne_sup = [["1","2","3"],["1.1","2.1","3.1"],["1.2","2.2","3.2"]];
	$file = fopen("index.csv",'a+');
	foreach ($ligne_sup as $key => $val) {
		fputcsv($file, $val);
	}

?>