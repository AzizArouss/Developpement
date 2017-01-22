<?php
// index_interface.php

class Objet{
  protected $_val1 = 1;
  protected $_val2 = 2;

}

class MaClasse
{
  protected $val3;
  protected $val4;

  function a(){
    echo 'a()<br>';
    return $this;
  }
  function b(){
    echo "b()<br>";
  }
  function c(Objet $val){
  function c(array $val){
    echo "c()<br>";
    var_dump($val);
  }
}
echo '<pre>';
$MaClasse = new MaClasse;
// var_dump($MaClasse);
// print_r($MaClasse);

$MaClasse->a();
$MaClasse->b();
$MaClasse->a()->b();


$objet = new Objet();
$MaClasse->c(new Objet());


echo '</pre>';
