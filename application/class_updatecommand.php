<?php

include_once("../domain/class_phonebookmapper.php");

class UpdateCommand {

	public static function executeCommand() {
		$id = $_GET["id"];
		$lastName = $_POST["lastName"];
		$firstName = $_POST["firstName"];
		$phoneType = $_POST["phoneType"];
		$number = $_POST["number"];
		
		if(!is_numeric($number)) {
			//ErrorCommand::executeCommand();
		}
		else {	
			if(isset($_GET["id"]))
				$phonebookrecord = PhoneBookMapper::find($id);
	
			if($phonebookrecord != null) {
				$phonebookrecord->setLastName($lastName);
				$phonebookrecord->setFirstName($firstName);
				$phonebookrecord->setPhoneType($phoneType);
				$phonebookrecord->setNumber($number);
				
				PhoneBookMapper::update($phonebookrecord);
			}
		}
		
		BrowseCommand::executeCommand();

	}

}