<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$equipid = $_GET['reservationid'];

//deleting the row from table
$result = mysqli_query($db, "DELETE FROM details WHERE reservationid=$reservationid");

//redirecting to the display page (index.php in our case)
header("Location:equipviewreservation.php");
?>
