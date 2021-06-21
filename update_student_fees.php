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
$ut=$_POST["tf"];
$put=$_POST["fp"];
$uta=($_POST["tf"]-$_POST["fp"]);


$sql = "UPDATE fees SET fees='$ut', feespaid='$put' , feesremaining='$uta' WHERE aid='$aid'";

$conn->query($sql);

echo "<script>window.location='student_fees_view.php'</script>";

$conn->close();


?>