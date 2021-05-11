<html>
<head>
	<title>Add Data</title>
</head>

<body>

	<a href="index.php">H O M E</a>
	<br/><br/>
	<center>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="5">
			<h1>Equipment Information</h1>
			<tr> 
				<td>Equip ID: </td>
				<td><input type="text" name="equipid"></td>
			</tr>
			<tr> 
				<td>Equip Name: </td>
				<td><input type="text" name="equipname"></td>
			</tr>
			<tr> 
				<td>Quantity: </td>
				<td><input type="text" name="quantity"></td>
			</tr>
			<tr> 
				<td>Equip Desc: </td>
				<td><input type="text" name="equipdesc"></td>
			</tr>
			<tr> 
				<td>Status: </td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

