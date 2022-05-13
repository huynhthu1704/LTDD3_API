<?php
require('Connect.php');
$query = "";
$id = "";
$student_name = "";
$username = "";
$pwd = "";
$img = "";
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        //Here Handle POST Request
        echo 'You are using ' . $method . ' Method';
        $id = isset($_POST['id']) ? $_POST['id'] : "";
        $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : "";
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
        $img = isset($_POST['img']) ? $_POST['img'] : null;
        echo "$id, $student_name, $username, $pwd ";
        $query = "INSERT INTO `tbl_student`(`id`, `student_name`, `username`, `pwd`, `img`) VALUES ('$id','$student_name','$username','$pwd', $img)";
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
        parse_str(file_get_contents('php://input'), $_PUT);
        var_dump($_PUT);
        echo $_PUT['id']; //$_PUT contains put fields 
        // $id = isset($_SERVER['id']) ? $_SERVER['id'] : "";
        // $student_name = isset($_SERVER['student_name']) ? $_SERVER['student_name'] : "";
        // $username = isset($_POST['username']) ? $_POST['username'] : "";
        // $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
        // $img = isset($_POST['img']) ? $_POST['img'] : null;
        // echo "$id, $student_name, $username, $pwd ";
        // $query = "UPDATE `tbl_student` SET `student_name` = '$student_name', `username` = '$username', `pwd` = '$pwd', `img` = $img WHERE `id` = '$id'";
        // if (mysqli_query($connect,$query)) {
        //     echo "Success";
        // } else {
        //     mysqli_error($connect);
        //     echo "Fail";
        // }
        // break;
   
    case 'DELETE':
        //Here Handle DELETE Request
        echo 'You are using ' . $method . ' Method';
        $id = isset($_POST['id']) ? $_POST['id'] : "";
             $query = "DELETE FROM `tbl_student` WHERE `id` = '$id'";
        if (mysqli_query($connect,$query)) {
            echo "Success";
        } else {
            echo "Fail";
        }
        break;
}
