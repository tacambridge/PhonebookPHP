<?php

include_once("../services/class_phonebooktdg.php");
include_once("../domain/class_phonebookrecord.php");

class PhoneBookMapper {
	
	public static function findAll() {
		$list = PhoneBookTDG::findAll();		
		return $list;
	}
	
	public static function find($id) {
		$phonebookrecord = PhoneBookTDG::find($id);
		return $phonebookrecord;
	}
	
	public static function insert($phonebookrecord) {
		PhoneBookTDG::insert($phonebookrecord->getLastName(), $phonebookrecord->getFirstName(), $phonebookrecord->getPhoneType(), $phonebookrecord->getNumber());
	}
	
	public static function update($phonebookrecord) {
		PhoneBookTDG::update($phonebookrecord->getId(), $phonebookrecord->getLastName(), $phonebookrecord->getFirstName(), $phonebookrecord->getPhoneType(), $phonebookrecord->getNumber());
	}
	
	public static function delete($phonebookrecord) {
		PhoneBookTDG::delete($phonebookrecord->getId());
	}

}


?>