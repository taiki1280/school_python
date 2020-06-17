<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>効果測定・入力画面</title>
</head>

<body>
  <form action="confirm_screen.php" method="post">
    <div>
      書籍情報登録
    </div>
    <ul>
      <li>書名<input type="text" name="book_name"></li>
      <li>著書<input type="text" name="name"></li>
      <li>出版社<input type="text" name="shop_name"></li>
      <li>ISBN<input type="text" name="isbn"></li>
      <li>定価<input type="text" name="price"></li>
      <li><input type="submit" value="確認"></li>
    </ul>
  </form>
</body>

</html>