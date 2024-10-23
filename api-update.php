<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow all origins (for testing)
header('Access-Control-Allow-Methods: POST, GET, OPTIONS'); // Include OPTIONS
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

// Handle OPTIONS request for CORS preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit;
}

// Get the raw POST data
$data = json_decode(file_get_contents('php://input'), true);

// Check if required fields are present
if (isset($data['userId'], $data['name'], $data['email'], $data['phone'], $data['address'])) {
    $id = $data['userId']; // Use userId for consistency
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];

    include "config.php";

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone=?, address=? WHERE id=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(array('message' => 'User Record Updated', 'status' => true));
    } else {
        echo json_encode(array('message' => 'User Record Not Updated: ' . $stmt->error, 'status' => false));
    }

    $stmt->close();
} else {
    echo json_encode(array('message' => 'Invalid input', 'status' => false));
}

$conn->close();
