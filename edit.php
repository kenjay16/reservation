<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$equipid = mysqli_real_escape_string($db, $_POST['equipid']);
	
	$equipname = mysqli_real_escape_string($db, $_POST['equipname']);
	$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
	$equipdesc = mysqli_real_escape_string($db, $_POST['equipdesc']);	
	$status = mysqli_real_escape_string($db, $_POST['status']);


	
	// checking empty fields
	if(empty($equipid) ||  empty($equipname) || empty($quantity) || empty($equipdesc) || empty($status)) {	
			
		if(empty($equipid)) {
			echo "<font color='red'>id field is empty.</font><br/>";
		}
		
		if(empty($equipname)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}
		if(empty($quantity)) {
			echo "<font color='red'>quantity field is empty.</font><br/>";
		}
		
		if(empty($equipdesc)) {
			echo "<font color='red'>equipdesc field is empty.</font><br/>";
		}	
		if(empty($status)) {
			echo "<font color='red'>status field is empty.</font><br/>";
		}	
	} else {	
		//updating the table
		$result = mysqli_query($db, "UPDATE equipment SET equipid='$equipid',equipname='$equipname',quantity='$quantity',equipdesc='$equipdesc',status='$status' WHERE equipid=$equipid");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$equipid = $_GET['equipid'];

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM equipment WHERE equipid=$equipid");

while($res = mysqli_fetch_array($result))
{
	$equipid = $res['equipid'];
	$equipname = $res['equipname'];
	$quantity = $res['quantity'];
	$equipdesc = $res['equipdesc'];
	$status = $res['status'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">H O M E</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Equip id</td>
				<td><input type="text" name="equipid" value="<?php echo $equipid;?>"></td>
			</tr>
			<tr> 
				<td>Equip Name</td>
				<td><input type="text" name="equipname" value="<?php echo $equipname;?>"></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="quantity" value="<?php echo $quantity;?>"></td>
			</tr>
			<tr> 
				<td>Equip Desc</td>
				<td><input type="text" name="equipdesc" value="<?php echo $equipdesc;?>"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $status;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="equipid" value=<?php echo $_GET['equipid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
