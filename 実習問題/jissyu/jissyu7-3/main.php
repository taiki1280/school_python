<?php
 // Teacherクラス、Cockクラスを定義したファイルの読み込み
 require_once("teacher.php");
 require_once("cock.php");

 // ユーザ定義コンストラクタを使用したインスタンス（オブジェクト）の生成
 $teacher = new Teacher("竹井一馬","教員","情報処理");
 $cock = new Cock("茂出木浩司","シェフ","オムライス");

 // 表示
 $teacher->introduce();
 $cock->introduce();

?>