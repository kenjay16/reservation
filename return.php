<html>
<head>
<title>Return Details</title>
<link href="style.css" rel="stylesheet" type="css.css">
<body>  
</body>

<center>
<form action="returndetails.php" method="post">
<table width="20%" border="5">
    
    <h2>Return Details</h2>
    <tr>
    <td>Reservation ID </td>
    <td><input type="text" name="reservationid"></td>
    </tr>

    <tr>
    <td>Remarks </td>
    <td><input type="text" name="remarks"></td>
    </tr>

    <tr>
    <td>Penalty </td>
    <td><input type="text" name="penalty"></td>
    </tr>

    <tr>
    <td>ReturnedTo </td>
    <td><input type="text" name="returnedto"></td>
    </tr>
    
    <tr>
    <td>ReturnedDate </td>
    <td><input type="text" name="returneddate"></td>
    </tr>

    <br>
    <td><input type="submit" name="submit" value="Add"></td>

    </tr>
</html>