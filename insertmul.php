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

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('Niel', 'Jennings', 'harris@me.com');";
$sql .= "INSERT INTO users (firstname, lastname, email)
VALUES ('Julie', 'Lam', 'julie@me.com');";
$sql .= "INSERT INTO users (firstname, lastname, email)
VALUES ('Justin', 'Lee', 'justin@me.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New Records Created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>