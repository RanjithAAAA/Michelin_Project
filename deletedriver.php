<?php
$conn = new mysqli("localhost","root","","login");

$driverid=$_REQUEST['driverid'];
$query = "DELETE FROM driver WHERE driverid=$driverid"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: driver.php"); 
?>