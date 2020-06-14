<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力画面</title>
</head>

<body>
  <div>
    <form method="GET" action="confirmation_screen.php">
      <ul>
        <li>氏名<input type="text" name="name"></li>
        <li>年齢<input type="number" name="age"></li>
        <li>郵便番号<input type="text" name="post_num"></li>
        <li><input type="submit" value="確認"></li>
      </ul>
    </form>
  </div>
</body>

</html>