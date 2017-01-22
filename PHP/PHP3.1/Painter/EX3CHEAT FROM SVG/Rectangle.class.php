<?php

class Rectangle extends Shaipe
{
	protected $height;

    protected $width;


	public function __construct()
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct();

		$this->height = 0;
		$this->width  = 0;
	}

	public function draw(SvgRenderer $renderer)
	{
		echo '===================<br>';
		echo __LINE__.'/ on passe par drawRectangle<br>';
		echo __LINE__.'/ $this->color: '.$this->color.'<br>';

		var_dump($renderer);
		echo '===================<br>';
		// Utilisation de l'objet renderer pour dessiner un rectangle avec ses propriétés.
		$renderer->drawRectangle
		(
			$this->location,
			$this->color,
			$this->opacity,
			$this->width,
			$this->height
		);
	}

	public function setSize($width, $height)
	{
		$this->height = $height;
		$this->width  = $width;
	}
}