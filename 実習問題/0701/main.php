<?php
require_once "teacher.php";
require_once "student.php";
$teacher = new Teacher("大原太郎", 28, "PHP");
$student = new Student("大原次郎", 19, 2);
$teacher->hello();
echo "\n";
$student->hello();
