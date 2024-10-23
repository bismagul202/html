<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['uid'] ?? null; // Handle undefined index
include("config.php");
$sql = "DELETE FROM users WHERE id = {$student_id}";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Record deleted', 'status' => true));
} else {
    echo json_encode(array('message' => 'No record deleted: ' . mysqli_error($conn), 'status' => false));
}

?>
