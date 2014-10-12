<?php

class PhonebookRecord {

	public $id;
	public $lastName;
	public $firstName;
	public $phoneType; //home, work, cellular, other
	public $number;
	
	function __construct($id, $lastName, $firstName, $phoneType, $number) {
		$this->id = $id;
		$this->lastName = $lastName;
		$this->firstName = $firstName;
		$this->phoneType = $phoneType;
		$this->number = $number;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getLastName() {
		return $this->lastName;
	}
	
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}
	
	public function getFirstName() {
		return $this->firstName;
	}
	
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	
	public function getPhoneType() {
		return $this->phoneType;
	}
	
	function setPhoneType($phoneType) {
		$this->phoneType = $phoneType;
	}
	
	function getNumber() {
		return $this->number;
	}
	
	function setNumber($number) {
		$this->number = $number;
	}
		
}

?>