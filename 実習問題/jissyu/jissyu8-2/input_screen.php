<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>入力画面</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div>

<form method="POST" action="confirmation_screen.php">
  <ul>
    <li><label>氏名<input type="text" name="name"></label></li>
    <li><label>年齢<input type="number" name="age"></label></li>
    <li><label>郵便番号<input type="text" name="adress"></label></li>
    <li><input type="submit" value="送信する"></li>
  </ul>
</form>

</div>
</body>
</html>
