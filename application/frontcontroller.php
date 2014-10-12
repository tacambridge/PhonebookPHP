<?php

include_once("class_browsecommand.php");
include_once("class_addcommand.php");
include_once("class_deletecommand.php");
include_once("class_updatecommand.php");

class FrontController {

	public function processRequest() {
		
		if(isset($_GET["command"])) {
			$command = $_GET["command"];
			$command::executeCommand();
		}
		else
			echo "No command selected";
	}

}

$frontController = new FrontController();
$frontController->processRequest();


?>