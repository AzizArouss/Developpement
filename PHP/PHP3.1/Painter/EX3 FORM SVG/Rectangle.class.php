<?php

class Rectangle extends Shaipe {
	protected $height;
    protected $width;

	public function __construct(){
		parent::__construct();

		$this->height = 0;
		$this->width  = 0;
	}

	public function draw(SvgRenderer $renderer){
		echo '===================<br>';
		echo __LINE__.'/ on passe par drawRectangle<br>';
		echo __LINE__.'/ $this->color: '.$this->color.'<br>';

		var_dump($renderer);
		echo '===================<br>';

		$renderer->drawRectangle
		(
			$this->location,
			$this->color,
			$this->opacity,
			$this->width,
			$this->height
		);
	}

	public function setSize($width, $height){
		$this->height = $height;
		$this->width  = $width;
	}
}