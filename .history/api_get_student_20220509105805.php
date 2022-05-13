<?php 
require('Connect.php');
$query = "Select * from tbl_student";
$resouter = mysqli_query($connect, $query);
$tempArray = array();
$total_records = mysqli_num_rows($resouter);
if ($total_records >= 1) {
    while ($row = mysqli_fetch_assoc($resouter)) {
        $tempArray[] = $row;
    }
    echo json_encode($tempArray);
}
