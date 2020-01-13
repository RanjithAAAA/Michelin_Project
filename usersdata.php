<?php


// Create connection
$conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");

if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
$routeid = $_GET['routeid'];
$stmt = $conn->prepare("SELECT username, boardingpoint, status, latitude, longitude FROM users where routeid='$routeid';");



$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($username, $boardingpoint, $status, $latitude, $longitude);
	
	$user = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['username'] = $username; 
		$temp['boardingpoint'] = $boardingpoint; 
		$temp['status'] = $status; 
		$temp['latitude'] = $latitude;
		$temp['longitude'] = $longitude;
		array_push($user, $temp);
	}
 
 

echo json_encode($user);



?>

