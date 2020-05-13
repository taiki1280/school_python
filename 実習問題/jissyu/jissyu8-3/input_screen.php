<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>入力画面</title>
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
    /* 再入力ならば前回の値を初期値にする */
    // 氏名に値があるかどうか
    if (isset($_POST['name'])){
      $name = $_POST['name'];
    } else {
      $name = "";
    }
    //年齢に値があるかどうか
    if (isset($_POST['age'])){
      $age = $_POST['age'];
    } else {
      $age = "";
    }
    //年齢に値があるかどうか
    if (isset($_POST['adress'])){
      $adress = $_POST['adress'];
    } else {
      $adress = "";
    }
  ?>
<form method="POST" action="confirmation_screen.php">
  <ul>
  <!-- valueには前回の値が初期値として入ります -->
    <li><label>氏名<input type="text" name="name" value="<?php echo $name; ?>"></label></li>
    <li><label>年齢<input type="number" name="age" value="<?php echo $age; ?>"></label></li>
    <li><label>郵便番号<input type="text" name="adress" value="<?php echo $adress; ?>"></label></li>
    <li><input type="submit" value="送信する"></li>
  </ul>
</form>

</div>
</body>
</html>
