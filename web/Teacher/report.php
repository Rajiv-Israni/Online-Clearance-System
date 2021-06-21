<?php


							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "teacher";

							$n=$_POST['id'];
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);

							 $sql = "SELECT stud_info.id,stud_info.fname,stud_info.lname,stud_info.sem,stud_info.enroll,attendance.aid,attendance.month,attendance.attendance
									 FROM stud_info 
									 INNER JOIN attendance ON stud_info.id=attendance.id where stud_info.id=$n";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							// output data of each row
	
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>". $row['id']. "</td><td>". $row['fname']. "</td><td>". $row['lname']. "</td><td>". $row['sem']. "</td><td>". $row['enroll']. "</td><td>". $row['month']. "</td><td>". $row['attendance']. "</td><td>".'<button type="button" class="btn btn-info btn-sm" data-toggle="modal" onclick="edit('.$row["aid"].')">Edit</button>'."</td>";
							echo "</tr>";
							}
							} else {
							echo "0 results";
							}
						?>