<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Fixed typo
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$data = json_decode(file_get_contents("php://input"), true);  
$student_id = $data['uid'];

include("config.php");
$sql = "SELECT * FROM users WHERE id={$student_id}";
$result = mysqli_query($conn, $sql) or die("sql query failed");

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result); // Get single user data
    echo json_encode(array('status' => true, 'user' => $user)); // Return status and user data
} else {
    echo json_encode(array('status' => false, 'message' => 'no record found'));
}

?>
