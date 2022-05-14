<?php
require("config.php");
require("db.php");
require("SinhVien.php");
$sv = new SinhVien();
echo($sv->getAllStudents());
