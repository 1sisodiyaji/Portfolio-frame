<?php
$host = "localhost";
$user = "root"; //change according to hosting
$pass = "";
$dbname = "wooble_users";
$link =  mysqli_connect($host, $user, $pass, $dbname);
if(!$link){
    die ("Connection Failed . mysqli.error()");
}

