<?php
// Database connection details
$servername = "localhost";
// Determine if the server is localhost
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $username = "root";
    $password = "";
    $dbname = "bhavicreations_db";
} else {
    $username = "bhavicreationspvtltd";
    $password = "qbWkuINh3wc8P9z";
    $dbname = "bhavicreationspvtltd";
   
    
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
