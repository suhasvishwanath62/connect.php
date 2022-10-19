<?php

$fname = val($_POST["fname"]);  
$lname = val($_POST["lname"]);  
$email = val($_POST["email"]);  

function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

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
VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. Record ID is: ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>