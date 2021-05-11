<html>
<head>	
	<title>Reservation Details</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($db, "SELECT * FROM details ORDER BY reservationid DESC"); // using mysqli_query instead
?>
<a href="adding.php">Add New Equipment</a><br/><br/>
 <form action="return.php" method="post">
 <table width="80%" border="0">
 <tr bgcolor="#CCCCCC">
	<h2>Reservation Details</h2>
		<td>Reservation ID</td>
		<td>Date</td>
		<td>Time</td>
		<td>Return Date</td>
		<td>Student ID</td>
		<td>Equipment ID</td>
		<td>Issuedby</td>
		<td>Update</td>

	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['reservationid']."</td>";
		echo "<td>".$res['reservationdate']."</td>";
		echo "<td>".$res['reservationtime']."</td>";
		echo "<td>".$res['returndate']."</td>";
		echo "<td>".$res['studentid']."</td>";	
		echo "<td>".$res['equipid']."</td>";	
		echo "<td>".$res['issuedby']."</td>";	
		echo "<td><a href=\"edit.php?reservationid=$res[reservationid]\">Edit</a> | <a href=\"delete.php?reservationid=$res[reservationid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
	}
	?>
	</table>

	</table>
	</form>
	<a href="return.php">Return Details</a><br/><br/>
</body>
</html>
