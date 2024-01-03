<?php

include_once '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $skillId = $_POST['skillId'];

    $deleteQuery = "DELETE FROM `Skills` WHERE `Skill_Id` = '$skillId';";
    $result = mysqli_query($link, $deleteQuery);

    $response = array();

    if ($result) {
        $response = ['success' => true, 'message' => 'Successfully deleted.'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to delete. ' . mysqli_error($link)];
    }

    echo json_encode($response);
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
