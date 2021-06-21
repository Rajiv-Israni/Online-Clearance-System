<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "college";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);

							$sql = "SELECT *
									 FROM fees";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							// output data of each row
	
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>". $row['id']. "</td><td>". $row['fname']. "</td><td>". $row['lname']. "</td><td>". $row['branch']. "</td><td>". $row['sem']. "</td><td>". $row['fees']. "</td><td>". $row['feespaid']. "</td><td>". $row['feesremaining']. "</td><td>".'<button type="button" class="btn btn-info btn-sm" data-toggle="modal" onclick="edit('.$row["id"].')">Edit</button>'."</td>";
							echo "</tr>";
							}
							} else {
							echo "0 results";
							}

							$conn->close();
						?>