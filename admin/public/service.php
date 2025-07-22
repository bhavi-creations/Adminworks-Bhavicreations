<?php
// Allow requests from your main domain
header("Access-Control-Allow-Origin: https://bhavicreations.com");
header("Content-Type: application/json");

// Your data
$services = [
    ["name" => "Website Design", "price" => 10000],
    ["name" => "Graphic Design", "price" => 5000],
    ["name" => "Digital Marketing", "price" => 8000]
];

// Send the JSON response
echo json_encode($services);
?>
