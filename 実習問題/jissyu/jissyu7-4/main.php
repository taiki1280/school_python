<?php
 //　Personクラスを定義したファイルの読み込み
 require_once("person.php");

 // ユーザ定義コンストラクタを使用したインスタンス（オブジェクト）の生成
 $person = new Person("竹井一馬","教員","情報処理");

 // 表示
 $person->person_introduce();
 $person->teacher_introduce();

?>