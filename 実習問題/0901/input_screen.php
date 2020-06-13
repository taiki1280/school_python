<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>入力画面</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <div>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $post_num = $_POST["post_num"];
    $sex = $_POST["sex"];
    $hobby = $_POST["hobby"];
    ?>
    <form method="POST" action="confirmation_screen.php">
      <ul>
        <li>氏名<input type="text" name="name" value=<?= $name ?>></li>
        <li>年齢<input type="number" name="age" value=<?= $age ?>></li>
        <li>郵便番号<input type="text" name="post_num" value=<?= $post_num ?>></li>
        <li>性別
          <input type="radio" name="sex" value="男性" <?= $sex == '男性' ? 'checked' : '' ?>>男性
          <input type="radio" name="sex" value="女性" <?= $sex == '女性' ? 'checked' : '' ?>>女性
        </li>
        <li>趣味
          <input type="checkbox" name="hobby[]" <?= in_array("音楽", $hobby) ? 'checked' : '' ?> value="音楽">音楽
          <input type="checkbox" name="hobby[]" <?= in_array("映画", $hobby) ? 'checked' : '' ?> value="映画">映画
          <input type="checkbox" name="hobby[]" <?= in_array("ダンス", $hobby) ? 'checked' : '' ?> value="ダンス">ダンス
          <input type="checkbox" name="hobby[]" <?= in_array("料理", $hobby) ? 'checked' : '' ?> value="料理">料理
          <input type="checkbox" name="hobby[]" <?= in_array("スポーツ", $hobby) ? 'checked' : '' ?> value="スポーツ">スポーツ
        </li>
        <li><input type="submit" value="確認"></li>
      </ul>
    </form>

  </div>
</body>

</html>