<?php

session_start();

include '../dbConnect.php';


if (isset($_POST['aboutsubmit'])) {
    if (!isset($_POST['aboutDesc'])  == NULL)) {
        $response = ['type' => 'error', 'message' => 'Please Enter Your Description  '];
    } else if (empty($_POST['aboutDesc'])) {
        $response = ['type' => 'error', 'message' => 'Please enter Type of Skill'];
    } else {
        $AboutDesc = mysqli_real_escape_string($link, $_POST['aboutDesc']);

        $query = "UPDATE `about_me` SET `description`='$AboutDesc' WHERE email = '637golusingh@gmail.com';
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
