<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>計算ページ</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  require_once("util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // エラーメッセージを出して、以下のコードをすべてキャンセルする
    exit($err);
  }
  // HTMLエスケープ（XSS対策）
  $_POST = es($_POST);
  ?>

  <?php
  // POSTされた値を取り出す
  if (isSet($_POST["kg"])){
    // 数値かどうか確認する
    $isNum = is_numeric($_POST["kg"]);
    if ($isNum){
      // 数値ならば計算式とフォーム表示の値で使う
      $kg = $_POST["kg"];
      $error = "";
    } else {
      $kg = "";
      $error = '<span class="error">←数値を入力してください。</span>';
    }
  } else {
    // POSTされた値がないとき
    $isNum = false;
    $kg = "";
    $error = "";
  }
  ?>

  <!-- 入力フォームを作る（現在のページにPOSTする） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li>
        <label>キログラム(kg)をポンド(lb)に換算：
        <input type="text" name="kg" value="<?php echo $kg; ?>">
        </label>
        <!-- エラー表示 -->
        <?php echo $error; ?>
      </li>
      <li><input type="submit" value="計算する"></li>
    </ul>
  </form>

  <?php
    // $kgが数値であれば計算結果を表示する
    if ($isNum) {
      echo "<HR>";
      $pounds = $kg * 2.2046;
      echo "{$kg}kgは{$pounds}ポンドです。";
    }
  ?>
</div>
</body>
</html>
