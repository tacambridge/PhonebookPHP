<?php

include_once("../domain/class_phonebookmapper.php");
include_once("../domain/class_phonetypemapper.php");

class BrowseCommand {

	public static function executeCommand() {
		$phoneBookList = PhoneBookMapper::findAll();
		$_REQUEST["phoneBookList"] = $phoneBookList;
		$phoneTypeList = PhoneTypeMapper::findAll();
		$_REQUEST["phoneTypeList"] = $phoneTypeList;
		include("../browseTV.php");
	}

}