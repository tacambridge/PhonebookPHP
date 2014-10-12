<?php

// Variables

$mysql_host = "127.0.0.1"; //edit
$mysql_database = "myDatabase";
$mysql_user = "root"; //edit
$mysql_password = "myPassword"; //edit


// Create connection to database server

$connection = mysql_connect($mysql_host, $mysql_user, $mysql_password); 
if (!$connection)
{
	die('Could not connect: ' . mysql_error());
}

// Select database

mysql_select_db($mysql_database, $connection);

?>
