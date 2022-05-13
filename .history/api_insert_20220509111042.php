<?php 
require('Connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['student_name'];
    $pwd = $_POST['pwd'];
    $username = $_POST['username'];
    $img = null;
    $query = "insert into tbl_student values($id, $name,$username, $pwd, $img)";
    if (mysqli_query($connect,$query)) {
        echo "Success";
    } else {
        echo "Fail";
    }

}