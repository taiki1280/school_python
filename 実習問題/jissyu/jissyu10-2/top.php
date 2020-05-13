<?php
    require_once("util.php");
    // エラーメッセージを入れる配列
    $errors = [];
    //ポスト送信されたユーザIDをクッキーに設定する（テスト用に5分で設定）
    if (isset($_POST["userid"])){
      $userid = $_POST["userid"];
      setcookie("userid",$userid,time()+60*5);
    } else {
      // ポストの値がないのでエラーの値を設定する
      $errors[] = "ポスト送信されたユーザIDの値がありません。";
    }
    
    //ポスト送信されたパスワードをクッキーに設定する（テスト用に5分で設定）
    if (isset($_POST["password"])){
      $password = $_POST["password"];
      setcookie("password",$password,time()+60*5);
    } else {
      // ポストの値がないのでエラーの値を設定する
      $errors[] = "ポスト送信されたパスワードの値がありません。";
    }
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
