<?php

session_start();

include '../dbConnect.php';


if (isset($_POST['Save_Skill'])) {
    if (!isset($_POST['skillName']) || ($_POST['skillName'] == "" || $_POST['skillName'] == NULL)) {
        $response = ['type' => 'error', 'message' => 'Please Enter Your Skill Name'];
    } else if (empty($_POST['Update_skill_type'])) {
        $response = ['type' => 'error', 'message' => 'Please enter Type of Skill'];
    } else if (empty($_POST['customRange9'])) {
        $response = ['type' => 'error', 'message' => 'Please enter a range of your skill'];
    } else {
        $skillName = mysqli_real_escape_string($link, $_POST['skillName']);
        $range = mysqli_real_escape_string($link, $_POST['customRange9']);
        $type = mysqli_real_escape_string($link, $_POST['Update_skill_type']);

        $query = "INSERT INTO `Skills`(`name`, `type`, `ranges`) VALUES ('$skillName','$type','$range')";
        $resQuery = mysqli_query($link, $query);

        if ($resQuery) {
            $_SESSION['status'] = "Skill Uploaded Successfully";
            header("Location: ../index.php");
        } else {
            $_SESSION['status'] = "Skill Uploaded failed";
            header("Location: ../index.php");
        }
    }
}

?>
