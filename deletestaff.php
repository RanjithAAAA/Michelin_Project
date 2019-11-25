<?php
$conn = new mysqli("localhost","root","","login");

$userid=$_REQUEST['userid'];
$query = "DELETE FROM users WHERE userid=$userid"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: staff.php"); 
?>