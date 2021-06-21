<?php


							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "college";

							//$n=$_POST['id'];
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);

							 $sql = "SELECT * FROM exam";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							// output data of each row
	
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>". $row['id']. "</td><td>". $row['fname']. "</td><td>". $row['lname']. "</td><td>". $row['utf']. "</td><td>". $row['uta']. "</td><td>". $row['putf']. "</td><td>". $row['puta']. "</td>";
							echo "</tr>";
							}
							} else {
							echo "0 results";
							}
						?>