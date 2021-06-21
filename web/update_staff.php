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
$fname=$_POST['fname'];
$lname=$_POST["lname"];
$role=$_POST["role"];
$dept=$_POST["dept"];


$sql = "UPDATE staff_details SET id='$id', fname='$fname' , lname='$lname' , role='$role' , department='$dept' WHERE id='$id'";

$conn->query($sql);

echo "<script>window.location='admin.php'</script>";

$conn->close();


?>