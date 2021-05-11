<html>
<head>
<title>Equipmnent Reservation</title>
<link href="style.css" rel="stylesheet" type="css.css">
<body>  
</body>

<center>
<form action="equipviewreservation.php" method="post">
<table width="20%" border="5">
    
    <h1>Equipment Reservation</h1>
    <tr>
    <td>Reservation ID: </td>
    <td><input type="text" name="reservationid"></td>
    </tr>

    <tr>
    <td>Date: </td>
    <td><input type="text" name="reservationdate"></td>
    </tr>

    <tr>
    <td>Time: </td>
    <td><input type="text" name="reservationtime"></td>
    </tr>

    <tr>
    <td>Return Date: </td>
    <td><input type="text" name="returndate"></td>
    </tr>
    
    <tr>
    <td>Student ID: </td>
    <td><input type="text" name="studentid"></td>
    </tr>

    <td>Equipment ID: </td>
    <td><input type="text" name="equipmentid"></td>
    </tr>

    <td>Issuedby: </td>
    <td><input type="text" name="issuedby"></td>
    </tr>

    <br>
    <td><input type="submit" name="submit" value="Reserve"></td>

    </tr>
</html>