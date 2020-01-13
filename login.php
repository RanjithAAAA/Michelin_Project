<?php


// Create connection
$conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");

if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

$stmt = $conn->prepare("SELECT routeid FROM commontable;");



$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($routeid);
	
	$user = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['routeid'] = $routeid; 
		array_push($user, $temp);
	}
 
 

echo json_encode($user);



?>