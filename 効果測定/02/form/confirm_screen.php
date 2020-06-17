<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>効果測定・確認画面</title>
</head>

<body>
  <h1>確認画面</h1>
  <?php
  $book_name = $_POST["book_name"];
  $name = $_POST["name"];
  $shop_name = $_POST["shop_name"];
  $isbn = $_POST["isbn"];
  $price = $_POST["price"];
  require_once 'util.php';
  echo '書名：', es($book_name), nl2br("\n");
  echo '著書：', es($name), nl2br("\n");
  echo '出版社：', es($shop_name), nl2br("\n");
  echo 'ISBN：', es($isbn), nl2br("\n");
  echo '定価：', es($price), '円', nl2br("\n");
  ?>
</body>

</html>