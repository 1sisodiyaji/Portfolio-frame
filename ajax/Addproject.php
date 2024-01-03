<?php

include '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icon = isset($_POST['icon']) ? $_POST['icon'] : null;
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $proj_start = isset($_POST['proj_start']) ? validateDate($_POST['proj_start']) : null;
    $proj_end = isset($_POST['proj_end']) ? validateDate($_POST['proj_end']) : null;

    if (empty($icon) || empty($title) || !$proj_start || !$proj_end) {
        $response = ['status' => 'error', 'message' => 'Invalid or missing input data'];
    } else {
        // Assuming your database table is named 'wooble_me_pages'
        $query = "INSERT INTO `wooble_me_pages` (`title`, `icon`, `start_date`, `end_date`) VALUES ('$title', '$icon', '$proj_start', '$proj_end')";

        $resQuery = mysqli_query($link, $query);

        if (!$resQuery) {
            $response = ['status' => 'error', 'message' => 'Error inserting data into the database: ' . mysqli_error($link)];
        } else {
            $response = ['status' => 'success', 'message' => 'Project Data Updated successfully'];
        }
    }
} else {
    $response = ['status' => 'error', 'message' => 'Invalid Request Method'];
}

header('Content-Type: application/json');
echo json_encode($response);
