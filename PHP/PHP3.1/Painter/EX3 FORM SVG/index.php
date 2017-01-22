<?php

var_dump($_POST);

include ('Point.class.php');
include ('Shape.class.php');
include ('Ellipse.class.php');
include ('Circle.class.php');
include ('Rectangle.class.php');
include ('Square.class.php');
include ('Triangle.class.php');
include ('SvgRenderer.class.php');
include ('Program.class.php');

        echo "<pre>";
// $program  = new Program();
// $renderer = new SvgRenderer();
// // var_dump($renderer);
// $program->run($renderer);
        echo "</pre>";

include ('index.phtml');

?>