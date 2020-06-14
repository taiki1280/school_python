<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力画面</title>
</head>

<body>
  <div>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $post_num = $_POST["post_num"];
    $sex = $_POST["sex"];
    $hobby = $_POST["hobby"];
    $condition_level = $_POST["condition_level"];
    // 文字の\n意味を持たせて代入
    $introduce = str_replace('\n', "\n", $_POST["introduce"]);
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    ?>
    <form method="POST" action="confirmation_screen.php">
      <ul>
        <li>氏名<input type="text" name="name" value=<?= $name ?>></li>
        <li>年齢<input type="number" name="age" value=<?= $age ?>></li>
        <li>郵便番号<input type="text" name="post_num" value=<?= $post_num ?>></li>
        <li>性別
          <select name="sex">
            <option value="男性" <?= $sex == '男性' ? 'selected' : '' ?>>男性</option>
            <option value="女性" <?= $sex == '女性' ? 'selected' : '' ?>>女性</option>
          </select>
        </li>
        <li>趣味
          <select name="hobby[]" multiple>
            <option value="音楽" <?= in_array("音楽", $hobby) ? 'selected' : '' ?>>音楽</option>
            <option value="映画" <?= in_array("映画", $hobby) ? 'selected' : '' ?>>映画</option>
            <option value="ダンス" <?= in_array("ダンス", $hobby) ? 'selected' : '' ?>>ダンス</option>
            <option value="料理" <?= in_array("料理", $hobby) ? 'selected' : '' ?>>料理</option>
            <option value="スポーツ" <?= in_array("スポーツ", $hobby) ? 'selected' : '' ?>>スポーツ</option>
          </select>
        </li>
        <li>調子
          <input type="range" name="condition_level" min="1" max="4" value=<?= $condition_level ?>>
        </li>
        <li>自己紹介
          <textarea name="introduce"><?= $introduce ?></textarea>
        </li>
        <li>生年月日
          <select name="year">
            <option value="">----</option>
            <?php foreach (range(1800, 2020) as $value) : ?>
              <option value=<?= $value ?> <?= $value == $year ? "selected" : "" ?>><?= $value ?></option>
            <?php endforeach ?>
          </select>
          年
          <select name="month">
            <option value="">--</option>
            <?php foreach (range(1, 12) as $value) : ?>
              <option value=<?= $value ?> <?= $value == $month ? "selected" : "" ?>><?= $value ?></option>
            <?php endforeach ?>
          </select>
          月
          <select name="day">
            <option value="">--</option>
            <?php foreach (range(1, 31) as $value) : ?>
              <option value=<?= $value ?> <?= $value == $day ? "selected" : "" ?>><?= $value ?></option>
            <?php endforeach ?>
          </select>
          日
        </li>
        <li><input type="submit" value="確認"></li>
      </ul>
    </form>

  </div>
</body>

</html>