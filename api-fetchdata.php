<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include("config.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql) or die("sql query failed");
if(mysqli_num_rows($result)>0){
 $output = mysqli_fetch_all($result ,MYSQLI_ASSOC);
 echo json_encode($output);
}else{
    echo json_encode(array('message'=>'no record found','status'=>false));

}

?>