<?php
include '../dbConnect.php';
echo "PHP file";

$skillName = $_POST['skillName'];
$type = $_POST['type'];
$range = $_POST['range'];
$email = "golu@wooble.org";
$query = "INSERT INTO `wooble_me_users` (`entry_id`, `title`,`subtitle`,  `email`,  `is_active`) VALUES ('$id','$title','$range', '$email','$type')";
$resQuery = mysqli_query($link, $query);
// find its project ID
$response = ['type' => 'success', 'message' => 'Project Data Updated successfully'];


header('Content-Type: application/json');
echo json_encode($response);
?>