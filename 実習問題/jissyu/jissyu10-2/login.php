<?php
    require_once("util.php");
    
    //ユーザIDのクッキーの値を取り出す
    if (isset($_COOKIE["userid"])){
      // 現在のユーザIDの値を取り出す
      $userid = $_COOKIE["userid"];
      $userid = es($userid);
    } else {
      // クッキーがないのでユーザIDに初期値を設定する
      $userid = "";
    }
    //パスワードのクッキーの値を取り出す
    if (isset($_COOKIE["password"])){
      // 現在のパスワードの値を取り出す
      $password = $_COOKIE["password"];
      $password = es($password);
    } else {
      // クッキーがないのでパスワードに初期値を設定する
      $password = "";
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ログイン画面</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div>
<table border="0">
<form method="POST" action="top.php" >
<tr>
<th>
ユーザID
</th>
<td>
<input type="text" name="userid" value="<?php echo $userid; ?>" size="24">
</td>
</tr>
<tr>
<th>
パスワード
</th>
<td>
<input type="password" name="password" value="<?php echo $password; ?>" size="24">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="ログイン">
</td>
</tr>
</form>
</table>
</div>
</body>
</html>
