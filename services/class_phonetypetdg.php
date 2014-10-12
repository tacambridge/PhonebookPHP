<?php

include_once("config.php");
include_once("../domain/class_phonetyperecord.php");

class PhoneTypeTDG {

	public static $table = "PhoneType";
	
	public static function createTable() {
		$query = "CREATE TABLE ".self::$table."
				(
				id int NOT NULL AUTO_INCREMENT,
				phoneType varchar(255),
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
		$query = "SELECT * FROM ".self::$table;
		$resultSet = mysql_query($query) or die(mysql_error());
		//return mysql_fetch_array($resultSet);		
		//return $resultSet;		
		
		$list = array();

		 while($rs = mysql_fetch_array($resultSet)) {
			$id = $rs["id"];
			$phoneType = $rs["phoneType"];
			
			$phonetyperecord = new PhonetypeRecord($id, $phoneType);
			
			//append item to list
			$list[] = $phonetyperecord;
		}
				
		return $list;
		
	}
	
	public static function find($id) {
		$query = "SELECT * FROM ".self::$table." WHERE id = $id";
		$resultSet = mysql_query($query) or die(mysql_error());
		//return mysql_fetch_array($resultSet);

		 while($rs = mysql_fetch_array($resultSet)) {
			$id = $rs["id"];
			$phoneType = $rs["phoneType"];
			
			$phonetyperecord = new PhonetypeRecord($id, $phoneType);
		}
		
		return $phonetyperecord;

	}
	
	public static function insert($phoneType) {
		$query = "INSERT INTO ".self::$table." (phoneType) VALUES(\"$phoneType\")";
		$resultSet = mysql_query($query) or die(mysql_error());
	}
	
	public static function update($id, $phoneType) {
		$query = "UPDATE ".self::$table." SET phoneType = \"$phoneType\" WHERE id = $id";
		$resultSet = mysql_query($query) or die(mysql_error());
	}
	
	public static function delete($id) {
		$query = "DELETE FROM ".self::$table." WHERE id = $id";
		$resultSet = mysql_query($query) or die(mysql_error());
	}

}


?>