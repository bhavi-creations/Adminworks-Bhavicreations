<?php
// Allow main domain only
header("Access-Control-Allow-Origin: https://bhavicreations.com");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DB connection (update credentials properly)
$conn = new mysqli("localhost", "your_db_user", "your_db_pass", "your_db_name");

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "DB connection failed"]);
    exit;
}

// Read and decode JSON input
$data = json_decode(file_get_contents("php://input"), true);

$name = $conn->real_escape_string($data['name'] ?? '');
$price = $conn->real_escape_string($data['price'] ?? '');

if ($name && $price) {
    $sql = "INSERT INTO services (name, price) VALUES ('$name', '$price')";
    if ($conn->query($sql)) {
        echo json_encode(["status" => "success", "message" => "Service added"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Insert failed"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Missing input"]);
}
?>
