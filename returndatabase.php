<?php
//including the database connection file
include_once("config.php");

//once the Submit button is clicked
if(isset($_POST['Submit'])) {	
	$reservationid = mysqli_real_escape_string($db, $_POST['reservationid']);
	$reservationdate = mysqli_real_escape_string($db, $_POST['reservationdate']);
	$reservationtime = mysqli_real_escape_string($db, $_POST['reservationtime']);
	$returndate = mysqli_real_escape_string($db, $_POST['returndate']);
	$studentid = mysqli_real_escape_string($db, $_POST['studentid']);
	$equipid = mysqli_real_escape_string($db, $_POST['equipid']);
	$issuedby = mysqli_real_escape_string($db, $_POST['issuedby']);
		
	
			
		//insert data to database	
	$result = mysqli_query($db, "INSERT INTO details(reservationid,reservationdate,reservationtime,returndate,studentid,equipid,issuedby) VALUES('$reservationid','$reservationdate','$reservationtime','$returndate','$studentid','$equipid','$issuedby')");
		
		//display success message
		echo "<font color='green'>Equipment Reserved.";
		echo "<br/><a href='index.php'>View Reservation Details</a>";
	
}
?>
