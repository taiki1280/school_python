<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力画面</title>
</head>

<body>
  <?php
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  require 'util.php';
  echo "氏名：", es($name), nl2br("\n");
  echo "パスワード：", es($password), nl2br("\n");
  echo "メールアドレス：", es($mail), nl2br("\n");
  ?>
</body>

</html>