

<?php

							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "college";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);

							$sql = "SELECT id,fname,lname,role,department FROM staff_details";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							// output data of each row
	
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>". $row['id']. "</td><td>". $row['fname']. "</td><td>". $row['lname']. "</td><td>". $row['role']. "</td><td>". $row['department']. "</td><td>".'<button type="button" class="btn btn-info btn-sm" onclick="edit('.$row["id"].')">Edit</button>'."</td>";
							echo "</tr>";
							}
							} else {
							echo "0 results";
							}
						?>