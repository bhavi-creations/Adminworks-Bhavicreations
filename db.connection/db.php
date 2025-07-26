<?php
$host = 'localhost';
// Determine if the server is localhost
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $user = "root";
    $pass = "";
    $db = "bhavicreations_db";
} else {
    $user = "bhavicreations";
    $pass = "d8Az75YlgmyBnVM";
    $db = "bhavicreations";
}



try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}



<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
// Set the default timezone to Asia/Kolkata
date_default_timezone_set('Asia/Kolkata');

$servername = "localhost";
$username = "locations-api";
$password = "4HuoG2wlkx5OsAs";
$dbname = "locations_api";

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $baseurl = "http://localhost/websites/location-app-api/";
}else{
    $baseurl = "https://locations-api.bhavicreations.com/";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>