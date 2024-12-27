<?php
$host = 'localhost';       // Change to your host
$username = 'root';        // Your MySQL username
$password = '';            // Your MySQL password
$dbname = 'my_website';    // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
