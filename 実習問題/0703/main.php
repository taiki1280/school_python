<?php
require_once "teacher.php";
require_once "cock.php";
$teacher = new Teacher("竹井一馬","教員","情報処理");
$cock = new Cock("茂出木浩司","シェフ","オムライス");
$teacher->introduce();
$cock->introduce();