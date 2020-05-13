<?php
// セッションの開始
session_start();
require_once("util.php");
?>
<?php
//セッションデータの取り出し
if (!empty($_SESSION['name'])){
      $name = $_SESSION['name'];
}
if (!empty($_SESSION['age'])){
      $age = $_SESSION['age'];
}
if (!empty($_SESSION['adress'])){
  $adress = $_SESSION['adress'];
}
if (!empty($_SESSION['sex'])){
  $sex = $_SESSION['sex'];
}
if (!empty($_SESSION['hobby'])){
  $hobby = $_SESSION['hobby'];
}
if (!empty($_SESSION['condition2'])){
  $condition = $_SESSION['condition2'];
}
if (!empty($_SESSION['introduction2'])){
  $introduction = $_SESSION['introduction2'];
}
if (!empty($_SESSION["date"])){
  $date = $_SESSION['date'];
}
if (!empty($_SESSION["youbi"])){
  $youbi = $_SESSION['youbi'];
}
// HTMLを表示する前にセッションを終了する
killSession()
?>

<?php
// セッションを破棄する
function killSession(){
  // セッション変数の値を空にする
  $_SESSION = [];
  // セッションクッキーを破棄する
  if (isset($_COOKIE[session_name()])){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-36000, $params['path']);
  }
  // セッションを破棄する
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>完了画面</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
echo "次のように受付けました。ありがとうございました。<br>",PHP_EOL;
echo "こんにちは、{$name}さん。<br>",PHP_EOL;
  echo "年齢は{$age}歳です。<br>",PHP_EOL;
  echo "住所は{$adress}です。<br>",PHP_EOL;
  echo "性別は{$sex}です。<br>",PHP_EOL;
  echo "趣味は",implode("と",$hobby),"です。<br>",PHP_EOL;
  echo "調子は{$condition}です。<br>",PHP_EOL;
  $length = mb_strlen($introduction);
  if ($length>0) {
    // 改行コードの前に<br>に挿入する
    $introduction_br = nl2br($introduction, false);
    echo $introduction_br,"<br>",PHP_EOL;
  }
  echo "生年月日は、{$date}{$youbi}曜日です。<br>",PHP_EOL;
?>
<a href="input_screen.php">最初のページに戻る</a>
</div>
</body>
</html>
