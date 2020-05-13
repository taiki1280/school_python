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
    //年齢に値があるかどうか
    if (isset($_POST['sex'])){
      $sex = $_POST['sex'];
    } else {
      $sex = "";
    }
      // 趣味の値をいれる
  if (isset($_POST['hobby']) && is_array($_POST['hobby'])) {
    $hobby = $_POST['hobby'];
  } else {
    // 未設定のときエラー
    $hobby = [];
}

?>

<?php
  // 初期値でチェックするかどうか
  function checked($value, $question){
    if (is_array($question)){
      // 配列のとき、値が含まれていればtrue
      $isChecked = in_array($value, $question);
    } else {
      // 配列ではないとき、値が一致すればtrue
      $isChecked = ($value===$question);
    }
    if ($isChecked) {
      // チェックする
      echo "checked";
    } else {
      echo "";
    }
  }
 ?>
<form method="POST" action="confirmation_screen.php">
  <ul>
  <!-- valueには前回の値が初期値として入ります -->
    <li><label>氏名<input type="text" name="name" value="<?php echo $name; ?>"></label></li>
    <li><label>年齢<input type="number" name="age" value="<?php echo $age; ?>"></label></li>
    <li><label>郵便番号<input type="text" name="adress" value="<?php echo $adress; ?>"></label></li>
    <li><span>性別</span>
    <label><input type="radio" name="sex" value="男性" <?php checked("男性",$sex); ?>>男性</label>
    <label><input type="radio" name="sex" value="女性" <?php checked("女性",$sex); ?>>女性</label>
    </li>
    <li><span>趣味</span>
        <label><input type="checkbox" name="hobby[]" value="音楽" <?php checked("音楽", $hobby); ?> >音楽</label>
        <label><input type="checkbox" name="hobby[]" value="映画" <?php checked("映画", $hobby); ?> >映画</label>
        <label><input type="checkbox" name="hobby[]" value="ダンス" <?php checked("ダンス", $hobby); ?> >ダンス</label>
        <label><input type="checkbox" name="hobby[]" value="料理" <?php checked("料理", $hobby); ?> >料理</label>
        <label><input type="checkbox" name="hobby[]" value="スポーツ" <?php checked("スポーツ", $hobby); ?> >スポーツ</label>
        </li>
    <li><input type="submit" value="送信する"></li>
  </ul>
</form>
</div>
</body>
</html>
