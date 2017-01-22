<?php

class Circle extends Ellipse {
	public function draw(SvgRenderer $renderer){
          echo 'on passe par drawEllipse<br>';
		$renderer->drawCircle
		(
			$this->location,
			$this->color,
			$this->opacity, 
			$this->xRadius
		);
	}

	public function setRadius($radius, $yRadius = 0){
		$this->xRadius = $radius;
		$this->yRadius = $radius;
	}
}