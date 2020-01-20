<?php


// Create connection
$conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");


if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
$status = $_POST['status'];
$username = $_POST['username'];
$Stmt = "update users set status='$status' where username='$username'";

if(mysqli_query($conn,$Stmt)){
 
 echo 'Data Inserted Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }

 mysqli_close($conn);


?>
