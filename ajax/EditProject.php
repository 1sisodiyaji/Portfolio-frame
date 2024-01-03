<?php
include '../dbConnect.php';
echo "PHP file";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST['icon'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please select a icon'];
    } else if ($_POST['title'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please enter a project title'];
    } else if ($_POST['duration1'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please enter a project Starting Date'];
    } else if ($_POST['duration2'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please enter a project Ending Date'];
    } else {
        $icon = $_POST['selectedIcon'];
        $title = $_POST['titles'];
        $duration1 = $_POST['proj_start'];
        $duration2 = $_POST['proj_end'];
        $email = "golu@wooble.org";
        $query = "UPDATE `wooble_me_users` SET (`icon` = '$icon' ,`title` = '$title', `start_date` ='$duration1' , `end_date` = '$duration2')where 'email` = `$email`";
        $resQuery = mysqli_query($link, $query);
        $response = ['type' => 'success', 'message' => 'Project Data Updated successfully'];
    }
}
header('Content-Type: application/json');
echo json_encode($response);
