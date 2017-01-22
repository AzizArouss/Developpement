<?php

// Liste des classes dans l'ordre des dépendances.
include 'Point.class.php';

include 'Shape.class.php';

include 'Ellipse.class.php';
include 'Circle.class.php';
include 'Rectangle.class.php';
include 'Square.class.php';
include 'Triangle.class.php';

include 'SvgRenderer.class.php';

include 'Program.class.php';



/********** CODE PRINCIPAL **********/

// Création d'une instance de notre programme et du moteur SVG puis exécution.
        echo "<pre>";
$program  = new Program();
$renderer = new SvgRenderer();
// var_dump($renderer);
$program->run($renderer);
        echo "</pre>";


// Inclusion du template.
include 'index.phtml';