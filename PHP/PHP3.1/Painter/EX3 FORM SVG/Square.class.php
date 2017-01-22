<?php

class Square extends Rectangle {
	public function setSize($size, $height = 0){
		$this->height = $size;
		$this->width  = $size;
	}
}