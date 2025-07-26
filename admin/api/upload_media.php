<?php
header("Access-Control-Allow-Origin: *"); // or specify main domain
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include '../db.connection.php'; // adjust if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mediaType = $_POST['media_type'];
    $mediaLink = $_POST['media_link'];
    $targetDir = "../uploads/";
    $fileName = basename($_FILES["media_file"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["media_file"]["tmp_name"], $targetFilePath)) {
        $sql = "INSERT INTO media_gallery (media_type, media_file, media_link) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $mediaType, $fileName, $mediaLink);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "File uploaded and saved."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Database error."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Upload failed."]);
    }
}
?>








