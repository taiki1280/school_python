<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
require_once("util.php");
  // フォーム入力の値を得る（名前とパスワードとメールアドレス）
  $name = $_GET["name"];
  $password = $_GET["password"];
  $email = $_GET["email"];

  // 表示する
  echo "氏名：", es($name),"<br>",PHP_EOL;
  echo "パスワード：", es($password),"<br>",PHP_EOL;
  echo "メールアドレス：", es($email),"<br>",PHP_EOL;
?>
</div>
</body>
</html>
