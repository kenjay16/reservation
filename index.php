<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<a href="index.php">H O M E</a>
	<br/><br/>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($db, "SELECT * FROM equipment ORDER BY equipid DESC"); // using mysqli_query instead
?>
<a href="adding.php">Add New Equipment</a></br></br>
<a href="equipreservation.php">Reserve Equipment</a></br></br>
 <form action="index.php" method="post">

	<table width="80%" border="0">
	<tr bgcolor="#CCCCCC">
		<td>Equip ID</td>
		<td>Equip Name</td>
		<td>Quantity</td>
		<td>Equip Desc</td>
		<td>Status</td>
		<td>Update</td>

	</tr>

	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['equipid']."</td>";
		echo "<td>".$res['equipname']."</td>";
		echo "<td>".$res['quantity']."</td>";
		echo "<td>".$res['equipdesc']."</td>";
		echo "<td>".$res['status']."</td>";	
		echo "<td><a href=\"edit.php?equipid=$res[equipid]\">Edit</a> | <a href=\"delete.php?equipid=$res[equipid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>


	</table>

	</table>
	</form>
</body>
</html>
