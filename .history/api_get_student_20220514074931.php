<?php
require("config.php");
require("db.php");
require("Student.php");
$sv = new SinhVien();
echo($sv->getAllStudents());
