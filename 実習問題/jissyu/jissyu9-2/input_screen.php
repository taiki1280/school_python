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
  function selected($value, $question){
    if (is_array($question)){
      // 配列のとき、値が含まれていればtrue
      $isSelected = in_array($value, $question);
    } else {
      // 配列ではないとき、値が一致すればtrue
      $isSelected = ($value===$question);
    }
    if ($isSelected) {
      // チェックする
      echo "selected";
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
    <select name ="sex">
    <option value="男性" <?php selected("男性",$sex); ?>>男性</option>
    <option value="女性" <?php selected("女性",$sex); ?>>女性</option>
    </select>
    </li>
    <li><span>趣味</span>
    <select name="hobby[]" size="3" multiple>
        <option value="音楽" <?php selected("音楽", $hobby); ?> >音楽</option>
        <option value="映画" <?php selected("映画", $hobby); ?> >映画</option>
        <option value="ダンス" <?php selected("ダンス", $hobby); ?> >ダンス</option>
        <option value="料理" <?php selected("料理", $hobby); ?> >料理</option>
        <option value="スポーツ" <?php selected("スポーツ", $hobby); ?> >スポーツ</option>
    </select>
    </li>
    <li><input type="submit" value="送信する"></li>
  </ul>
</form>
</div>
</body>
</html>
