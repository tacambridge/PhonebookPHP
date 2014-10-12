<?php

include_once("../services/class_phonetypetdg.php");
include_once("../domain/class_phonetyperecord.php");

class PhoneTypeMapper {
	
	public static function findAll() {
		$list = PhoneTypeTDG::findAll();		
		return $list;
	}
	
	public static function find($id) {
		$phonetyperecord = PhoneTypeTDG::find($id);
		return $phonetyperecord;
	}
	
	public static function insert($phonetyperecord) {
		PhoneTypeTDG::insert($phonetyperecord->getPhoneType());
	}
	
	public static function update($phonetyperecord) {
		PhoneTypeTDG::update($phonetyperecord->getId(), $phonetyperecord->getPhoneType());
	}
	
	public static function delete($phonetyperecord) {
		PhoneTypeTDG::delete($phonetyperecord->getId());
	}

}


?>