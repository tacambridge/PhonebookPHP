<?php

include_once("layout/header.php");

echo "<h1>Browse Entries</h1>";

echo "<div id=\"tabs1\">
	<div id=\"viewall\" class=\"x-hide-display\">";
	

$list = $_REQUEST["phoneBookList"];

if(empty($list)) {
	echo "No Entries Found";
}
else {

	echo "<table>
			<tr>
				<td>Last Name</td>
				<td>First Name</td>
				<td>Phone Type</td>
				<td>Number</td>
				<td>Update</td>
				<td>Delete</td>
			<tr>";
			
	foreach ($list as &$phonebookrecord) {
	
		echo "
			<form action=\"frontcontroller.php?command=UpdateCommand&id=".$phonebookrecord->getId()."\" method=\"POST\">
				</tr>
					<td><input type=\"text\" name=\"lastName\" width=\"30px\" value=\"".$phonebookrecord->getLastName()."\"></td>
					<td><input type=\"text\" name=\"firstName\" width=\"30px\" value=\"".$phonebookrecord->getFirstName()."\"></td>
					<td><select name=\"phoneType\">
							<option value=\"".$phonebookrecord->getPhoneType()."\" select>".$phonebookrecord->getPhoneType()."</option>                                    
							<option value=\"Home\" select>Home</option>                                    
							<option value=\"Work\">Work</option>                                     
							<option value=\"Cellular\">Cellular</option>                                     
							<option value=\"Other\">Other</option>                                   
						</select>
					<td><input type=\"text\" name=\"number\" width=\"30px\" value=\"".$phonebookrecord->getNumber()."\"></td>
					<td><input type=\"submit\" name=\"submit\" value=\"Update\" width=\"30px\"></td>
					<td><input type=button onClick=\"parent.location='frontcontroller.php?command=DeleteCommand&id=".$phonebookrecord->getId()."'\" value='Delete'></td>
				</tr>
			</form>";
	}
	
	echo "</table>
	";
}
	echo "</div>
	<div id=\"addcontact\" class=\"x-hide-display\">";

	include_once("addTV.php");

	echo "</div>
</div>";

include_once("layout/footer.php");

?>

