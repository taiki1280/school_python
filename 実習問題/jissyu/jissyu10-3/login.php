<?php
    require_once("util.php");
    
    //ユーザIDとパスワードのクッキーの値を取り出す
    if (isset($_COOKIE["userString"])){
      // クッキーの値を取り出す
      $userString = $_COOKIE["userString"];
      //値を配列にする
      $users = explode("&",$userString);
      $users = es($users);
    } else {
      // クッキーがないのでユーザIDとパスワードに初期値を設定する
      $users[0] = "";
      $users[1] ="";
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
<input type="text" name="userid" value="<?php echo $users[0]; ?>" size="24">
</td>
</tr>
<tr>
<th>
パスワード
</th>
<td>
<input type="password" name="password" value="<?php echo $users[1]; ?>" size="24">
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
