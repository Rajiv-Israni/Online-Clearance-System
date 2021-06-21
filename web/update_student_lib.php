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
$ut=$_POST["branch"];
$put=$_POST["fine"];
$uta=$_POST["reason"];


$sql = "UPDATE lib_fine SET branch='$ut', fine='$put' , reason='$uta' WHERE aid='$aid'";

$conn->query($sql);

echo "<script>window.location='student_list_library.php'</script>";

$conn->close();


?>