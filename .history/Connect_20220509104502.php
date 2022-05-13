<?php 
$serverName = "localhost";
$username = "root";
$password = 'mysql';
$database = "qlhv";
$connect = new mysqli($serverName, $username, $password, $database);
if ($connect->connect_error) {
    die("Connect failed");
}
?>