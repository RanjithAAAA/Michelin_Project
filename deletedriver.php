<?php
$conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");

$driverid=$_REQUEST['driverid'];
$query = "DELETE FROM driver WHERE driverid=$driverid"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: driver.php"); 
?>
