<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_POST['id'];
$aid=$_POST['aid'];
$ut=$_POST["utf"];
$put=$_POST["putf"];
$uta=$_POST["uta"];
$puta=$_POST["puta"];


$sql = "UPDATE exam SET utf='$ut', putf='$put' , uta='$uta', puta='$puta' WHERE id='$id'";

$conn->query($sql);

echo "<script>window.location='student_exam.php?id='+$id</script>";

$conn->close();


?>