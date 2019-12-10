<?php
$conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");

$userid=$_REQUEST['userid'];
$query = "DELETE FROM users WHERE userid=$userid"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: staff.php"); 
?>
