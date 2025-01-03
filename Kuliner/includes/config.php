<?php
// Set default timezone
date_default_timezone_set('Asia/Jakarta');

// Define base URL
$base_url = 'http://localhost/kuliner/';

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kuliner";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
?>
