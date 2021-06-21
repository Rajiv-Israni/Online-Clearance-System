<?php include('server.php') ?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
while($row = mysqli_fetch_array($showdata5))
$id = $row['id'];
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

if($row['attendance']>75.00)
 {
	
	$arr[1] = 00.00;
	
	}
	else if($row['attendance']<75.00 && $row['attendance']>50.00)
	{
		$arr[1] = 500.00;
	}
	else if($row['attendance']<50.00 && $row['attendance']>25.00)
	{
		$arr[1] = 700.00;
	}
	else
	{
		$arr[1] = 900.00;
	}
	
	
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



$conn->close();

?>