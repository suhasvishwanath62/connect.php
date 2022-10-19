<?php
$servername = "localhost";
$username = "root";
$password = "test2";
$dbname = "mywebsite";

// Create Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Prepare Statement
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");

//Bind Prepare Statement
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set Parameters and Execute
$firstname = "Lewis";
$lastname = "Hall";
$email = "lewis@me.com";
$stmt->execute();

$firstname = "Allen";
$lastname = "Moore";
$email = "allen@me.com";
$stmt->execute();

$firstname = "Dave";
$lastname = "Jones";
$email = "dave@me.com";
$stmt->execute();

echo "New Records Created";

// Close Statement and Database Connection
$stmt->close();
$conn->close();
?>