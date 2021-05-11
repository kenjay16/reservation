<?php
//including the database connection file
include_once("config.php");

//once the Submit button is clicked
if(isset($_POST['Submit'])) {	
	$equipid = mysqli_real_escape_string($db, $_POST['equipid']);
	$equipname = mysqli_real_escape_string($db, $_POST['equipname']);
	$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
	$equipdesc = mysqli_real_escape_string($db, $_POST['equipdesc']);
	$status = mysqli_real_escape_string($db, $_POST['status']);
		
	
			
		//insert data to database	
		$result = mysqli_query($db, "INSERT INTO equipment(equipid,equipname,quantity,equipdesc,status) VALUES('$equipid','$equipname','$quantity','$equipdesc','$status')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	
}
?>

