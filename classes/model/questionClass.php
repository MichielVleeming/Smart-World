<?php
//Bart
class Question {

	private $id;
	private $pcodering;
	private $text;
	
	public function Question($id, $text) {
		$this->id = $id;
		$this->text = $text;
	}
		
	public function getId() {
		return $this->id;
	}
	
	public function getPcodering() {
		return $this->pcodering;
	}	

	public function getText() {
		return $this->text;
	}		
}