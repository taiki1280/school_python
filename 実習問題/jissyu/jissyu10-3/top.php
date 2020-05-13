<?php
    require_once("util.php");
    // エラーメッセージを入れる配列
    $errors = [];
    //ポスト送信されたユーザIDを取り出す
    if (isset($_POST["userid"])){
      $userid = $_POST["userid"];
    } else {
      // ポストの値がないのでエラーの値を設定する
      $errors[] = "ポスト送信されたユーザIDの値がありません。";
    }
    
    //ポスト送信されたパスワードを取り出す
    if (isset($_POST["password"])){
      $password = $_POST["password"];
    } else {
      // ポストの値がないのでエラーの値を設定する
      $errors[] = "ポスト送信されたパスワードの値がありません。";
    }
    //クッキーに文字列に連結して保存する（テスト用に5分で設定）
    //使用するのはログイン画面に戻った時
    $userString = $userid."&".$password;
    setcookie("userString",$userString,time()+60*5);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>トップ画面</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div>

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
  <input type="button" value="戻る" onclick="location.href='login.php'">
</span>
<?php
}else{
  echo "こんにちは、{$userid}さん。<br>",PHP_EOL;
  echo "パスワードは{$password}です。<br>",PHP_EOL;
?>
<input type="button" value="戻る" onclick="location.href='login.php'">
<?php
}
?>

</div>
</body>
</html>
