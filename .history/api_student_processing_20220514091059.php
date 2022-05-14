<?php
require("config.php");
require("db.php");
require("Student.php");
$sv = new Student();
$method = $_SERVER['REQUEST_METHOD'];
//Use to get data from request method that is not get, post
function parseInput()
{
    $data = file_get_contents("php://input");
    if (!$data) {
        return array();
    }
    parse_str($data, $result);
    return $result;
}
switch ($method) {
    case 'POST':
        $id = isset($_POST['id']) ? $_POST['id'] : "";
        $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : "";
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
        $img = isset($_POST['img']) ? $_POST['img'] : null;
        //query
        $query = "INSERT INTO `tbl_student`(`id`, `student_name`, `username`, `pwd`, `img`) VALUES ('$id','$student_name','$username','$pwd', '$img')";
        if (mysqli_query($sv::$connection, $query)) {
            echo "Success to add student with id: " . $id;
        } else {
            echo "Fail";
        }
        break;
    case 'PUT':
        //Get data from put request method
        $_PUT = parseInput();
        $id = isset($_PUT['id']) ? $_PUT['id'] : "";
        $student_name = isset($_PUT['student_name']) ? $_PUT['student_name'] : "";
        $username = isset($_PUT['username']) ? $_PUT['username'] : "";
        $pwd = isset($_PUT['pwd']) ? $_PUT['pwd'] : "";
        $img = isset($_PUT['img']) ? $_PUT['img'] : null;
        $query = "UPDATE `tbl_student` SET `student_name`='$student_name',`username`='$username',`pwd`='$pwd',`img`='$img' WHERE `id`='$id'";
        if (mysqli_query($sv::$connection, $query)) {
            echo "Success to edit student with id: " . $id;
        } else {
            echo "Fail";
        }
        break;

    case 'DELETE':
        //Get data from put request method
        $_DELETE = parseInput();
        $id = isset($_DELETE['id']) ? $_DELETE['id'] : "";
        $query = "DELETE FROM `tbl_student` WHERE `id` = '$id'";
        if (mysqli_query($sv::$connection, $query)) {
            echo "Success to delete student with id: " . $id;
        } else {
            echo "Fail";
        }
        break;
    default:
        break;
}
