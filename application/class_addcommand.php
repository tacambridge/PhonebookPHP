<?php

include_once("../domain/class_phonebookmapper.php");
include_once("class_browsecommand.php");

class AddCommand {

	public static function executeCommand() {
		$id = $_POST["id"];
		$lastName = $_POST["lastName"];
		$firstName = $_POST["firstName"];
		$phoneType = $_POST["phoneType"];
		$number = $_POST["number"];
			
		if(!is_numeric($number)) {
			//ErrorCommand::executeCommand();
		}
		else {
			$phonebookrecord = new PhoneBookRecord($id, $lastName, $firstName, $phoneType, $number);
			PhoneBookMapper::insert($phonebookrecord);
		}
		
		BrowseCommand::executeCommand();

	}

}