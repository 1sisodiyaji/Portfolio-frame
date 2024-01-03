<?php
include '../dbConnect.php';

if($_SERVER['REQUEST_METHOD']=== "POST"){
    $url = $_POST['url'];
    $hostname = $_POST['hostname'];

    $query = "INSERT INTO `links`(`hostname`, `url`) VALUES ('$hostname','$url')";
    $resQuery = mysqli_query($link,$query);

    if($resQuery){
        $response = ['type' => 'success', 'message' => 'Links  Updated successfully'];
    }
    else{
        $response = ['type' => 'error', 'message' => 'Not Done'.$query];
    }

}