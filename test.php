<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT EMP_ID , EMP_NAME , EMP_JOB FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1><tr><th>ID</th><th>Name</th><th>Job</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["EMP_ID"]."</td><td>".$row["EMP_NAME"]."</td><td>".$row["EMP_JOB"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>