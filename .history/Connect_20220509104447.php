<?php 
$servername = "localhost";
$username = "root";
$password = 'mysql';
$database = "qlhv";
$connect = new mysqli($servername, $username, $password, $database);
if ($connect->connect_error) {
    die("Connect failed");
}
?>