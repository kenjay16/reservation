<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$reservationid = mysqli_real_escape_string($db, $_POST['reservationid']);
	$reservationdate = mysqli_real_escape_string($db, $_POST['reservationdate']);
	$reservationtime = mysqli_real_escape_string($db, $_POST['reservationtime']);
	$returndate = mysqli_real_escape_string($db, $_POST['returndate']);	
	$studentid = mysqli_real_escape_string($db, $_POST['studentid']);
	$equipid = mysqli_real_escape_string($db, $_POST['equipid']);
	$issuedby = mysqli_real_escape_string($db, $_POST['issuedby']);


	
	// checking empty fields
	if(empty($reservationid) ||  empty($reservationdate) || empty($reservationtime) || empty($returndate) || empty($studentid) || empty($equipid) || empty($issuedby)) {	
			
		if(empty($reservationid)) {
			echo "<font color='red'>id field is empty.</font><br/>";
		}
		
		if(empty($reservationdate)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}
		if(empty($reservationtime)) {
			echo "<font color='red'>time() field is empty.</font><br/>";
		}
		
		if(empty($returndate)) {
			echo "<font color='red'>returndate field is empty.</font><br/>";
		}	
		if(empty($studentid)) {
			echo "<font color='red'>studentid field is empty.</font><br/>";
		}	
		if(empty($equipid)) {
			echo "<font color='red'>equipid field is empty.</font><br/>";
		}
		if(empty($issuedby)) {
			echo "<font color='red'>issuedby field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($db, "UPDATE details SET reservationid='$reservationid',reservationdate='$reservationdate',reservationtime='$reservationtime',returndate='$returndate',studentid='$studentid',equipid='$equipid',issuedby='$issuedby' WHERE reservationid=$reservationid");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: equipviewreservation.php");
	}
}
?>
<?php
//getting id from url
$equipid = $_GET['reservationid'];

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM reservation WHERE reservationid=$reservationid");

while($res = mysqli_fetch_array($result))
{
	$reservationid = $res['reservationid'];
	$reservationdate = $res['reservationdate'];
	$reservationtime = $res['reservationtime'];
	$returndate = $res['returndate'];
	$studentid = $res['studentid'];
	$equipid = $res['equipid'];
	$issuedby = $res['issuedby'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="equipviewreservation.php">H O M E</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Reservation ID</td>
				<td><input type="text" name="reservationid" value="<?php echo $reservationid;?>"></td>
			</tr>
			<tr> 
				<td>Reservation Date</td>
				<td><input type="text" name="reservationdate" value="<?php echo $reservationdate;?>"></td>
			</tr>
			<tr> 
				<td>Reservation Time</td>
				<td><input type="text" name="reservationtime" value="<?php echo $reservationtime;?>"></td>
			</tr>
			<tr> 
				<td>Return Date</td>
				<td><input type="text" name="returndate" value="<?php echo $returndate;?>"></td>
			</tr>
			<tr> 
				<td>Student ID</td>
				<td><input type="text" name="studentid" value="<?php echo $studentid;?>"></td>
			</tr>
			<tr> 
				<td>Equipment ID</td>
				<td><input type="text" name="equipmentid" value="<?php echo $equipmentid;?>"></td>
			</tr>
			<tr> 
				<td>Issued By</td>
				<td><input type="text" name="issuedby" value="<?php echo $issuedby;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="reservationid" value=<?php echo $_GET['reservationid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
