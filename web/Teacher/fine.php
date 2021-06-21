<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

$id = $_GET['id'];
// Create connection
$arr=array();
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT SUM(utf) as utf, SUM(uta) as uta,SUM(putf) as putf, SUM(puta) as puta 
		FROM exam
		where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
 $row = $result->fetch_assoc();
	
	$a = $row['utf'];
	$b = $row['uta'];
	$c = $row['putf'];
	$d = $row['puta'];
 } else {
     echo "0 results";
 }
 $arr[0] = (($a+$c)*50)+(($b+$d)*100);
// echo $exam_fine;

$pql="SELECT AVG(attendance) as attendance
		from attendance
		where id=$id";
$result = $conn->query($pql);

if ($result->num_rows > 0) {
   
 $row = $result->fetch_assoc();
	
	$arr[1] = $row['attendance'];
	
	
 } else {
     echo "0 results";
 }

 //echo $attendance_fine;

 $qql="SELECT SUM(fine) as fine
		from lib_fine
		where id=$id";
$result = $conn->query($qql);

if ($result->num_rows > 0) {
   
 $row = $result->fetch_assoc();
	
	$arr[2] = $row['fine'];
	
	
 } else {
     echo "0 results";
 }

 //echo $library_fine;

$rql="SELECT SUM(fine) as fine
		from cau_mon
		where id=$id";
$result = $conn->query($rql);

if ($result->num_rows > 0) {
   
 $row = $result->fetch_assoc();
	
	$arr[3] = $row['fine'];
	
	
 } else {
     echo "0 results";
 }

 //echo $miscellaneous_fine;

$tql="SELECT SUM(feesremaining) as feesremaining
		from fees
		where id=$id";
$result = $conn->query($tql);

if ($result->num_rows > 0) {
   
 $row = $result->fetch_assoc();
	
	$arr[4] = $row['feesremaining'];
	
	
 } else {
     echo "0 results";
 }

$myJSON = json_encode($arr);

echo $myJSON;

$conn->close();

?>