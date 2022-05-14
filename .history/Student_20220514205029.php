<?php
//class: query to get Products
class Student extends Db
{
    //get all menu
    public function getAllStudents()
    {
        //Quyery
        $sql = self::$connection->prepare("SELECT * FROM tbl_student");
        $sql->execute();
        $items = array();//Var array items
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);//Get array Products
        return json_encode($items);
    }
        //Search student
    public function searchStudentByName($student_name)
    {
        //Query
        $sql = self::$connection->prepare("SELECT * FROM `tbl_student` WHERE `student_name` LIKE '%$student_name%'");
        $sql->execute();
        $items = array();//Var array items
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);//Get array Products
        return json_encode($items);
    }
}
?>