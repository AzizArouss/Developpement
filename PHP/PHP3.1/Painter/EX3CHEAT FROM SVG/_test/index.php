<?php
// Liste des classes dans l'ordre des dépendances.
// include 'Point.class.php';

// include 'Shape.class.php';

// include 'Ellipse.class.php';
// include 'Circle.class.php';
// include 'Rectangle.class.php';
// include 'Square.class.php';
// include 'Triangle.class.php';

// include 'SvgRenderer.class.php';
include 'personnage.class.php';
include 'newProg.class.php';
include 'Program2.class.php';


$perso1 = new Personnage();
$perso1->parler();
echo $perso1->_naissance.'<br>';
$perso1->_naissance = 10;
echo $perso1->_naissance.'<br>';

$prog1= new newProg();
$prog1->run1();
$prog2= new Program2();
$prog2->run1($prog1);
echo newProg::$var.'/<br>';


/********** CODE PRINCIPAL **********/

// Création d'une instance de notre programme et du moteur SVG puis exécution.
//         echo "<pre>";
// $program  = new Program();
// $renderer = new SvgRenderer();
// var_dump($renderer);
// $program->run($renderer);
//         echo "</pre>";


// Inclusion du template.
include 'index.phtml';