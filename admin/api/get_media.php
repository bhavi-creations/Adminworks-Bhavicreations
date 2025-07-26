<?php
include 'db_connection.php';

header("Access-Control-Allow-Origin: *"); // Allow both domains
header("Content-Type: application/json");

$sql = "SELECT * FROM our_works ORDER BY id DESC";
$result = $conn->query($sql);

$data = [];

while ($row = $result->fetch_assoc()) {
    $file_path = "https://adminworks.bhavicreations.com/uploads/ourworks" . $row['file_name'];
    $data[] = [
        "media_type" => $row['media_type'],
        "media_url" => $file_path,
        "link" => $row['link']
    ];
}

echo json_encode($data);
?>
