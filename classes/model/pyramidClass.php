<?php
//Michiel
class Pyramid {

	private $numbers;
	private $SVG_paths;
	private $tooltip;
	
	public function Question($numbers, $SVG_paths, $tooltip) {
        $this->numbers = $numbers;
        $this->SVG_paths = $SVG_paths;
		$this->tooltip = $tooltip;
	}
		
	public function getNumbers() {
		return $this->numbers;
	}
	
	public function getSVG_paths() {
		return $this->SVG_paths;
	}	

	public function gettooltip() {
		return $this->tooltip;
	}		
}