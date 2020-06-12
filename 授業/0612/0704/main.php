<?php
require_once "person.php";
$person = new Person("竹井一馬", "教員", "情報処理");
$person->person_introduce();
$person->teacher_introduce();
