<?php 
require('Connect.php');
$query = "Select * from tbl_student";
$id = "";
$student_name = "";
$username = "";
$pwd = "";
$img = "";
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
      //Here Handle GET Request
      echo 'You are using '.$method.' Method';
      break;
    case 'POST':
      //Here Handle POST Request
      echo 'You are using '.$method.' Method';
      $id = isset($_POST['id']) ? $_POST['id'] : "";
      $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : "";
      $username = isset($_POST['username']) ? $_POST['username'] : "";
      $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";
      $img = isset($_POST['img']) ? $_POST['img'] : "";
      $query = "Insert into tbl_student(id, student_name, username, pwd, img) values($id, $student_name, $username, $pwd, $img)";
      break;
    case 'PUT':
      //Here Handle PUT Request
      echo 'You are using '.$method.' Method';
      break;
    case 'PATCH':
      //Here Handle PATCH Request
      echo 'You are using '.$method.' Method';
      break;
    case 'DELETE':
      //Here Handle DELETE Request
      echo 'You are using '.$method.' Method';
      break;
   
    }
$resouter = mysqli_query($connect, $query);
$tempArray = array();
$total_records = mysqli_num_rows($resouter);
if ($total_records >= 1) {
    while ($row = mysqli_fetch_assoc($resouter)) {
        $tempArray[] = $row;
    }
    echo json_encode($tempArray);
}
