<?php
// Database configuration
$hostname = 'localhost';
$username = 'u684285749_cpct';
$password = 'U684285749_cpct';
$database = 'u684285749_cpct';

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
