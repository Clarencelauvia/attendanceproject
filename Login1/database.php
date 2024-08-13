<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "atms";

$connection = mysqli_connect($host_name, $user_name, $password, $database);

if($connection==false){
    die("Connection error :" . mysqli_connect_error());
}