<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$id = $_GET['id'];
// Create connection
$arr=array();
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM exam where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
	
		$arr[0] = $row['utf'];
		$arr[1] = $row['putf'];
		$arr[2] = $row['aid'];
		$arr[3] = $row['id'];
		$arr[4] = $row['uta'];
		$arr[5] = $row['puta'];
	
	

} else {
    echo "0 results";
}


$myJSON = json_encode($arr);

echo $myJSON;



?>