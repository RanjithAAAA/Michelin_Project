<?php


// Create connection
$conn = new mysqli("localhost","root","","login");

if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
$status = $_GET['status']
$username = $_GET['username']
$stmt = $conn->prepare("update users set status='$status' where username='$username';");



$stmt->execute();
	
	//binding results to the query 
	//$stmt->bind_result($routeid);
	
	//$user = array(); 
	
	//traversing through all the result 
	//while($stmt->fetch()){
		//$temp = array();
		//$temp['routeid'] = $routeid; 
		//array_push($user, $temp);
	//}
 
 

//echo json_encode($user);



?>