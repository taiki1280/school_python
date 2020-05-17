<?php
require_once "person.php";
$person = new Person("鈴木一郎", 48, '男性', 180.3, 79.4);
$person->personDisp();
$person->bmiDisp();
$person->obesityDisp();
$person->idealWeightDisp();