<?php
require('Connect.php');
$query = "";
$id = "";
$student_name = "";
$username = "";
$pwd = "";
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        //Here Handle POST Request
        echo 'You are using ' . $method . ' Method';
        $id = isset($_POST['id']) ? $_POST['id'] : "";
        $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : "";
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
        echo "$id, $student_name, $username, $pwd ";
        $query = "INSERT INTO `tbl_student`(`id`, `student_name`, `username`, `pwd`) VALUES ('$id','$student_name','$username','$pwd')";
        if (mysqli_query($connect,$query)) {
            echo "Success";
        } else {
            mysqli_error($connect);
            echo "Fail";
        }
        break;
    case 'PUT':
        //Here Handle PUT Request
        echo 'You are using ' . $method . ' Method';
        break;
    case 'PATCH':
        //Here Handle PATCH Request
        echo 'You are using ' . $method . ' Method';
        break;
    case 'DELETE':
        //Here Handle DELETE Request
        echo 'You are using ' . $method . ' Method';
        break;
}
