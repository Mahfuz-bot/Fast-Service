<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fast_service";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connections
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
