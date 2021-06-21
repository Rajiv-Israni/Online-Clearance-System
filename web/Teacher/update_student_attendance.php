<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_POST['id'];
$aid=$_POST['aid'];
$mon=$_POST["month"];
$att=$_POST["attendance"];


$sql = "UPDATE attendance SET month='$mon', attendance='$att' WHERE aid='$aid'";

$conn->query($sql);

echo "<script>window.location='student_details.php?id='+$id</script>";

$conn->close();


?>