<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

$id = $_GET['id'];
// Create connection
$arr=array();
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT aid,id,month,attendance FROM attendance where aid = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
	
		$arr[0] = $row['month'];
		$arr[1] = $row['attendance'];
		$arr[2] = $row['aid'];
		$arr[3] = $row['id'];
	
	

} else {
    echo "0 results";
}


$myJSON = json_encode($arr);

echo $myJSON;



	$conn->close();
?>