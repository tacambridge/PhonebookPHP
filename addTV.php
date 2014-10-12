
<h1>Add Entry</h1>

<form action = "frontController.php?command=AddCommand" method = "POST">
		<table>
				<tr>
						<td>Last Name: </td>
						<td><input type="text" name="lastName" width="30px"></td>
				</tr>
				<tr>
						<td>First Name: </td>
						<td><input type="text" name="firstName" width="30px"></td>
				</tr>
				<tr>
						<td>Phone Type: </td>
						<td>
							<select name="phoneType">
								<option value="Home" select>Home</option>                                    
								<option value="Work">Work</option>                                     
								<option value="Cellular">Cellular</option>                                     
								<option value="Other">Other</option>                                   
							</select>
						</td>
				</tr>
				<tr>
						<td>Number: </td>
						<td><input type="text" name="number" width="30px"></td>
				</tr>
				<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" width="30px"><input type="reset" name="submit" value="Reset" width="30px"></td>
				</tr>
		</table>
</form>
