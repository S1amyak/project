<?php
$server = "127.0.0.1";

$email = "root";
$password = "";
$database = "homemadedb";

$conn = mysqli_connect($server,$email, $password,$database);
if(!$conn){
    die("Error" . mysqli_connect_errno());
}
?>