<?php

class SvgRenderer {
    private $results;
    private $shapes;

    public function __construct(){
        $this->results = array();
        $this->shapes  = array();
    }

    public function addShape(Shaipe $shape){
        echo __LINE__.'/ Shaipe $shape<br>';
        var_dump($shape);
        // Ajout d'un objet géométrique au tableau d'objets.
        array_push($this->shapes, $shape);
    }

	public function drawCircle(Point $center, $color, $opacity, $radius){
        $x = $center->getX();
        $y = $center->getY();

        array_push
		(
            $this->results,
			"<circle cx='$x' cy='$y' r='$radius' fill='$color' opacity='$opacity' />"
		);
	}

	public function drawEllipse(Point $center, $color, $opacity, $xRadius, $yRadius){
        $x = $center->getX();
        $y = $center->getY();

        array_push
		(
            $this->results,
			"<ellipse cx='$x' cy='$y' rx='$xRadius' ry='$yRadius' fill='$color' opacity='$opacity' />"
		);
	}

	public function drawRectangle(Point $origin, $color, $opacity, $width, $height){
        echo '------cuoocou<br>';
        echo 'drawRectangle<br>';
        echo '------cuoocou<br>';

        $x = $origin->getX();
        $y = $origin->getY();

        array_push
		(
            $this->results,
			"<rect x='$x' y='$y' width='$width' height='$height' fill='$color' opacity='$opacity' />"
		);
	}

    public function drawTriangle(array $points, $color, $opacity){

        $x1 = $points[0]->getX();
        $y1 = $points[0]->getY();
        $x2 = $points[1]->getX();
        $y2 = $points[1]->getY();
        $x3 = $points[2]->getX();
        $y3 = $points[2]->getY();

        array_push
        (
            $this->results,
            "<polygon points='$x1 $y1,$x2 $y2,$x3 $y3' fill='$color' opacity='$opacity' />"
        );
    }

	public function getResult(){
		$svgContainer  = '<svg height="600px" width="800px">';
		$svgContainer .= implode($this->results);
		$svgContainer .= '</svg>';

		return $svgContainer;
	}

    public function run(){  
            echo __LINE__.'/ $this->shapes<br>';
            var_dump($this->shapes[0]);

        foreach($this->shapes as $shape){
            echo __LINE__.'/ *************<br>';
            echo 'fonction run dans le foreach<br>';
            echo 'shape dans la boucle<br>';
            var_dump($shape);
            echo '$this<br>';
            var_dump($this);
            echo __LINE__.'/ *************<br>';

            $shape->draw($this);

        }
    }
}