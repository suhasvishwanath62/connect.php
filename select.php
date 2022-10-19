<?php
$servername = "localhost";
$username = "root";
$password = "test2";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, email, date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>



