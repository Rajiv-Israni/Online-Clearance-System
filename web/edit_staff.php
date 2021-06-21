<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$id = $_GET['id'];
// Create connection
$arr=array();
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT id,fname,lname,role,department FROM staff_details where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
	
		$arr[0] = $row['id'];
		$arr[1] = $row['fname'];
		$arr[2] = $row['lname'];
		$arr[3] = $row['role'];
		$arr[4] = $row['department'];
		
	

} else {
    echo "0 results";
}


$myJSON = json_encode($arr);

echo $myJSON;



?>