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
//セッションの開始
session_start();
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
  // $_POST変数に値があれば、セッション変数に受け渡す
  if (isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
  }
  if (isset($_POST['age'])){
    $_SESSION['age'] = $_POST['age'];
  }
  if (isset($_POST['adress'])){
    $_SESSION['adress'] = $_POST['adress'];
  }
  if (isset($_POST['sex'])){
    $_SESSION['sex'] = $_POST['sex'];
  }
  if (isset($_POST['hobby']) && is_array($_POST['hobby'])) {
    $_SESSION['hobby'] = $_POST['hobby'];
  }
  if (isset($_POST['condition'])){
    $_SESSION['condition'] = $_POST['condition'];
  }
  if (isset($_POST['introduction'])){
    $_SESSION['introduction'] = $_POST['introduction'];
  }
  if (isSet($_POST["year"])&&isSet($_POST["month"])&&isSet($_POST["day"])){
    $_SESSION['year'] = $_POST["year"];
    $_SESSION['month'] = $_POST["month"];
    $_SESSION['day'] = $_POST["day"];
  }

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
  // 調子のチェック
  $min = 1;
  $max = 5;
  // POSTされた値を取り出す
  if (isSet($_POST["condition"])){
    $condition = $_POST["condition"];
    // 値が整数かつ範囲内かどうかをチェックする
    $isCondition = ctype_digit($condition) && ($condition>=$min) && ($condition<=$max);
    if (!$isCondition){
      $errors[] = "調子の値にエラーがありました。";
      $condition = $min;
    }
  }else{
    // POSTされた値がないとき
    $condition = round(($min+$max)/2);
    $isCondition = true; // 初期値も普通を表示する
  }
  
  // POSTされたテキスト文を取り出す
  if (isSet($_POST["introduction"])){
    $introduction = $_POST["introduction"];
    // HTMLタグやPHPタグを削除する
    $introduction = strip_tags($introduction);
    // 最大150文字だけ取り出す（改行コードもカウントする）
    $introduction = mb_substr($introduction, 0, 150);
    // HTMLエスケープを行う
    $introduction = es($introduction);
  }else{
  // POSTされた値がないとき
  $introduction = "";
  }
 // POSTされた値を取り出す
 if (isSet($_POST["year"])&&isSet($_POST["month"])&&isSet($_POST["day"])){
  $theYear = $_POST["year"];
  $theMonth = $_POST["month"];
  $theDay = $_POST["day"];
  // 値が日付として正しいかチェックする
  $isDate = checkdate($theMonth, $theDay, $theYear);
  if (!$isDate){
    $error[] = "日付として正しくありません。";
  } else {
    // 日付オブジェクトを作る
    $dateString = $theYear . "-". $theMonth . "-" . $theDay;
    $dateObj = new DateTime($dateString);
  }
} else {
  $isDate = false;
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
  ?>
  <span>
  <input type="button" value="戻る" onclick="location.href='input_screen.php'">
</span>
<?php
}else{
  echo "こんにちは、{$name}さん。<br>",PHP_EOL;
  echo "年齢は{$age}歳です。<br>",PHP_EOL;
  echo "住所は{$adress}です。<br>",PHP_EOL;
  echo "性別は{$sex}です。<br>",PHP_EOL;
  echo "趣味は",implode("と",$hobby),"です。<br>",PHP_EOL;
  if ($isCondition) {
    $conditionList = ["絶不調", "不調", "普通", "好調", "絶好調"];
    echo "調子は{$conditionList[$condition-1]}です。<br>",PHP_EOL;
    
  }
  // テキストが入力されていれば表示する
  $length = mb_strlen($introduction);
  if ($length>0) {
    // 改行コードの前に<br>に挿入する
    $introduction_br = nl2br($introduction, false);
    echo $introduction_br,"<br>",PHP_EOL;
  }
// 正しい日付であれば表示する
if ($isDate) {
  // 日付を年月日の書式にする
  $date = $dateObj->format("Y年m月d日");
  // 日付から曜日を求める
  $w = (int)$dateObj->format("w");
  $week = ["日", "月", "火", "水", "木", "金", "土"];
  $youbi = $week[$w];
  echo "生年月日は、{$date}{$youbi}曜日です。<br>",PHP_EOL;
}
  ?>

  <?php
  //完了画面に遷移する前に、調子、自己紹介、生年月日を入れなおす。
  $_SESSION['condition2'] = $conditionList[$condition-1];
  $_SESSION['introduction2'] = $introduction;
  $_SESSION['date'] = $date;
  $_SESSION['youbi'] = $youbi;


  ?>
  <input type="button" value="訂正する" onclick="location.href='input_screen.php'">
  <input type="button" value="送信する" onclick="location.href='completion_screen.php'">
<?php
}
?>

</div>
</body>
</html>
