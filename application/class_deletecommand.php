<?php

include_once("../domain/class_phonebookmapper.php");
include_once("class_browsecommand.php");

class DeleteCommand {

	public static function executeCommand() {
		$id = $_GET["id"];
			
		if(isset($_GET["id"]))
			$phonebookrecord = PhoneBookMapper::find($id);

		if($phonebookrecord != null)
			PhoneBookMapper::delete($phonebookrecord);
		
		BrowseCommand::executeCommand();

	}

}