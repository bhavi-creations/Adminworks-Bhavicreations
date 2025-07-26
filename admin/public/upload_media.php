<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $media_type = $_POST['media_type']; // Posters, Videos, etc.
    $link = $_POST['link']; // Optional URL
    $file = $_FILES['media_file'];

    $upload_dir = "uploads/";
    $filename = basename($file['name']);
    $target_path = $upload_dir . $filename;

    if (move_uploaded_file($file['tmp_name'], $target_path)) {
        $sql = "INSERT INTO our_works (media_type, file_name, link) VALUES ('$media_type', '$filename', '$link')";
        $conn->query($sql);
        echo "Uploaded Successfully.";
    } else {
        echo "Upload failed.";
    }
}
?>
