<?php
header('Content-Type: application/json');

// Sample DB config (update with your DB info)
$conn = new mysqli("localhost", "username", "password", "your_database");

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "DB connection failed"]);
    exit;
}

$sql = "SELECT * FROM media_uploads ORDER BY id DESC";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode([
    "status" => "success",
    "data" => $data
]);
?>
