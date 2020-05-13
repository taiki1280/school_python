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
  // エラーメッセージを入れる配列
  $errors = [];
?>

<?php
  // 氏名のチェック
  if (isset($_POST['name'])){
    $name = trim($_POST['name']);
    if ($name===""){
      // 空白のときエラー
      $errors[] = "氏名を入力してください。";
    }
  } else {
    // 未設定のときエラー
    $errors[] = "氏名を入力してください。";
  }

   // 年齢のチェック
   if (isset($_POST['age'])){
    $age = $_POST['age'];
    // 0以上の整数でないときエラー
    if (!ctype_digit($age)){
      $errors[] = "年齢を整数で入力してください。";
    }
  }else{
    //未設定のときエラー
    $errors[] ="年齢を入力してください。";
  }

  //郵便番号のチェック
  if(isset($_POST['adress'])){
    // 郵便番号を取り出す
    $adress = trim($_POST['adress']);
    // 郵便番号のパターン
    $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($pattern, $adress)){
      // 郵便番号の形式になっていない
      $errors[] ="郵便番号を正しく入力してください。";
    }
  } else {
    // 未設定エラー
    $errors[] ="郵便番号を正しく入力してください。";
  }
  // 性別のチェック
  if (isset($_POST['sex'])){
    $sex = ($_POST['sex']);
  } else {
    // 未設定のときエラー
    $errors[] = "性別にチェックをいれてください。";
  
  }
  // 趣味の値をいれる
  if (isset($_POST['hobby']) && is_array($_POST['hobby'])) {
      $hobby = $_POST['hobby'];
  } else {
    // 未設定のときエラー
    $errors[] = "趣味にチェックをいれてください。";
  }
?>

<?php
if (count($errors)>0){
  //エラーがあったとき
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";

}else{
  echo "こんにちは、{$name}さん。<br>",PHP_EOL;
  echo "年齢は{$age}歳です。<br>",PHP_EOL;
  echo "住所は{$adress}です。<br>",PHP_EOL;
  echo "性別は{$sex}です。<br>",PHP_EOL;
  echo "趣味は",implode("と",$hobby),"です。<br>",PHP_EOL;

  }
  ?>
<!-- 戻りボタンのフォーム -->
<form method="POST" action="input_screen.php">
<!-- 隠しフィールドに名前、年齢、郵便番号を設定してPOSTする -->
<input type="hidden" name="name" value = "<?php echo $name ?>">
<input type="hidden" name="age" value = "<?php echo $age ?>">
<input type="hidden" name="adress" value = "<?php echo $adress ?>">
<input type="hidden" name="sex" value = "<?php echo $sex ?>">
<?php
if (isset($_POST['hobby']) && is_array($_POST['hobby'])) {
  foreach($hobby as $value){
?>
<input type="hidden" name="hobby[]" value = "<?php echo $value ?>">
<?php
  }
}
?>

    <ul>
      <li><input type="submit" value="戻る"></li>
    </ul>
  </form>


</div>
</body>
</html>
