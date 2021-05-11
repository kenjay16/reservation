 <?php

include_once ("config.php");

if(isset($_POST['submit']))

{
	$studentname=mysqli_real_escape_string($db, $_POST['studentname']);
	$studentcourse=mysqli_real_escape_string($db, $_POST['course']);
	$yearlevel=mysqli_real_escape_string($db, $_POST['year']);

//insert data to database
	$result=mysqli_query($db, "INSERT INTO student(studentname, course, year) VALUES ('$studentname', '$studentcourse', '$yearlevel')");

	echo "";
	echo "<br>";

}	
?>
<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($db, "SELECT * FROM equipment ORDER BY equipid DESC"); // using mysqli_query instead
	echo "<font color='green'>Data added successfully.";

?>
<br>
<a href="adding.php">Add Equipment</a>
 <form action="index.php" method="post">
 

</form>
