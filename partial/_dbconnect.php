<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database); 
if(!$conn){
    die("Sorry! You failed to connect" . mysqli_connect_error());
}
?>