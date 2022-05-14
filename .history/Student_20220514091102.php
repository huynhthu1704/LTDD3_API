<?php
//class: query to get Products
class Student extends Db
{
    //Get all menu
    public function getAllStudents()
    {
        //Query
        $sql = self::$connection->prepare("SELECT * FROM tbl_student");
        $sql->execute();
        $items = array();//Var array items
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);//Get array Products
        return json_encode($items);
    }
}
?>