<?php 
require('Connect.php');
$query = "Select * from tbl_student";
switch ($method) {
    case 'GET':
      //Here Handle GET Request
      echo 'You are using '.$method.' Method';
      break;
    case 'POST':
      //Here Handle POST Request
      echo 'You are using '.$method.' Method';
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
