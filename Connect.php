<?php 
$serverName = "localhost";
$username = "root";
$password = "";
$database = "student_management";
$connect = new mysqli($serverName, $username, $password, $database);
if ($connect->connect_error) {
    die("Connect failed");
}
?>