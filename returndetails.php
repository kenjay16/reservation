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
$result = mysqli_query($db, "SELECT * FROM returndetails ORDER BY reservationid DESC"); // using mysqli_query instead
?>
 <form action="index.php" method="post">
 <table width="80%" border="0">
 <tr bgcolor="#CCCCCC">
	<h2>Returned Details</h2>
		<td>Reservation ID</td>
		<td>Remarks</td>
		<td>Penalty</td>
		<td>Returned To</td>
		<td>Returned Date</td>

	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['reservationid']."</td>";
		echo "<td>".$res['remarks']."</td>";
		echo "<td>".$res['penalty']."</td>";
		echo "<td>".$res['returnedto']."</td>";
		echo "<td>".$res['returneddate']."</td>";		
		echo "<td><a href=\"edit.php?reservationid=$res[reservationid]\">Edit</a> | <a href=\"delete.php?reservationid=$res[reservationid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
	}
	?>
	</table>

	</table>
	</form>
			<button><a href="student.php">BACK TO LOGIN</a></button>
</body>
</html>
