<?php
require("config.php");
require("db.php");
require("Student.php");
$sv = new Student();
echo $sv->getAllStudents();
