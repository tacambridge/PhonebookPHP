<?php

include_once("config.php");
include_once("../domain/class_phonebookrecord.php");

class PhoneBookTDG {

	public static $table = "PhoneBook";
	
	public static function createTable() {
		$query = "CREATE TABLE ".self::$table."
				(
				id int NOT NULL AUTO_INCREMENT,
				lastName varchar(255) NOT NULL,
				firstName varchar(255) NOT NULL,
				phoneType varchar(255),
				number varchar(11),
				PRIMARY KEY (id)
				)
				";
		$resultSet = mysql_query($query) or die(mysql_error());
	}
	
	public static function tearDown() {
		$query = "DROP TABLE ".self::$table;
		$resultSet = mysql_query($query) or die(mysql_error());
	}
	
	public static function findAll() {
		$query = "SELECT * FROM ".self::$table." ORDER BY lastname ASC";
		$resultSet = mysql_query($query) or die(mysql_error());
		//return mysql_fetch_array($resultSet);		
		//return $resultSet;		
		
		$list = array();

		 while($rs = mysql_fetch_array($resultSet)) {
			$id = $rs["id"];
			$lastName = $rs["lastName"];
			$firstName = $rs["firstName"];
			$phoneType = $rs["phoneType"];
			$number = $rs["number"];
			
			$phonebookrecord = new PhoneBookRecord($id, $lastName, $firstName, $phoneType, $number);
			
			//append item to list
			$list[] = $phonebookrecord;
		}
				
		return $list;
		
	}
	
	public static function find($id) {
		$query = "SELECT * FROM ".self::$table." WHERE id = $id";
		$resultSet = mysql_query($query) or die(mysql_error());
		//return mysql_fetch_array($resultSet);

		 while($rs = mysql_fetch_array($resultSet)) {
			$id = $rs["id"];
			$lastName = $rs["lastName"];
			$firstName = $rs["firstName"];
			$phoneType = $rs["phoneType"];
			$number = $rs["number"];
			
			$phonebookrecord = new PhoneBookRecord($id, $lastName, $firstName, $phoneType, $number);
		}
		
		return $phonebookrecord;

	}
	
	public static function insert($lastName, $firstName, $phoneType, $number) {
		$query = "INSERT INTO ".self::$table." (lastName, firstName, phoneType, number) VALUES(\"$lastName\", \"$firstName\", \"$phoneType\", \"$number\")";
		$resultSet = mysql_query($query) or die(mysql_error());
	}
	
	public static function update($id, $lastName, $firstName, $phoneType, $number) {
		$query = "UPDATE ".self::$table." SET lastName = \"$lastName\", firstName = \"$firstName\", phoneType = \"$phoneType\", number = \"$number\" WHERE id = $id";
		$resultSet = mysql_query($query) or die(mysql_error());
	}
	
	public static function delete($id) {
		$query = "DELETE FROM ".self::$table." WHERE id = $id";
		$resultSet = mysql_query($query) or die(mysql_error());
	}

}


?>