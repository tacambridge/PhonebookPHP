<?php

class PhonetypeRecord {

	public $id;
	public $phoneType; //home, work, cellular, other
	
	function __construct($id, $phoneType) {
		$this->id = $id;
		$this->phoneType = $phoneType;
	}
	
	public function getId() {
		return $this->id;
	}
		
	public function getPhoneType() {
		return $this->phoneType;
	}
	
	function setPhoneType($phoneType) {
		$this->phoneType = $phoneType;
	}
			
}

?>