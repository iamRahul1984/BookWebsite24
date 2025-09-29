<?php
$servername = "localhost"; // Usually 'localhost'
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "10books"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>