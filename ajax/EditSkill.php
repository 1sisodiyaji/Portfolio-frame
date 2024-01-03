<?php
include '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST['skillField2'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please Enter Your SKill Name'];
    } else if ($_POST['type'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please enter Type of Skill'];
    } else if ($_POST['range'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please enter a range of your skill'];
    }  else {
        $skillName = $_POST['skillName'];
        $type = $_POST['type'];
        $range = $_POST['range'];
        $email = "golu@wooble.org";
        $query = " UPDATE  `Skills` SET `Skill_Id`='[1]',`name`='$skillName',`type`='$type',`ranges`='$range' WHERE 1 ";
        $resQuery = mysqli_query($link, $query);
        // find its project ID
        $response = ['type' => 'success', 'message' => 'Project Data Updated successfully'];
    }
}
header('Content-Type: application/json');
echo json_encode($response);
