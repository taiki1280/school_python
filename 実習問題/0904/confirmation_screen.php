<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
</head>

<body>
  <div>
    <?php
    // フォーム入力値の取得
    $name = $_POST["name"];
    $age = $_POST["age"];
    $post_num = $_POST["post_num"];
    $sex = $_POST["sex"];
    $hobby = $_POST["hobby"];
    $condition_level = $_POST["condition_level"];
    $introduce = $_POST["introduce"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];

    require_once "util.php";
    // 表示
    if (preg_match("/.+/", $name))
      echo "こんにちは、", es($name), "さん。", nl2br("\n");
    else
      echo "名前を入力してください。", nl2br("\n");
    if (preg_match("/\d+/", $age))
      echo "年齢は", es($age), "です。", nl2br("\n");
    else
      echo "年齢を整数で入力してください。", nl2br("\n");
    if (preg_match("/\d{3}-\d{4}$/", $post_num))
      echo "郵便番号は", es($post_num), "です。", nl2br("\n");
    else
      echo "郵便番号を正しく入力してください", nl2br("\n");
    if (isset($sex))
      echo "性別は", es($sex), nl2br("\n");
    else
      echo "性別にチェックをいれてください", nl2br("\n");
    if (isset($hobby))
      echo "趣味は", implode("と", $hobby), "です。", nl2br("\n");
    else
      echo "趣味にチェックをいれてください", nl2br("\n");
    // スライダーは必ず入力があるので内容有無確認不要
    switch ($condition_level) {
      case 1:
        $condition = "絶不調";
        break;
      case 2:
        $condition = "不調";
        break;
      case 3:
        $condition = "好調";
        break;
      case 4:
        $condition = "絶好調";
        break;
    }
    echo "調子は{$condition}です。", nl2br("\n");
    echo nl2br($introduce);

    $datetime = new DateTime();
    $datetime->setDate($year, $month, $day);
    $week = ["日", "月", "火", "水", "木", "金", "土"];
    $w = (int) $datetime->format('w');
    echo "生年月日は、{$year}年{$month}月{$day}日", $week[$w], '曜日です。';
    ?>
    <!-- nl2brは改行コード(\n)を<br>に変換する関数 -->

    <!-- input_screen.phpに情報を渡すためのフォーム(項目表示はしない) -->
    <!-- 戻るボタンのみ表示 -->
    <form method="POST" action="input_screen.php">
      <input type="hidden" name="name" value=<?= $name ?>>
      <input type="hidden" name="age" value=<?= $age ?>>
      <input type="hidden" name="post_num" value=<?= $post_num ?>>
      <input type="hidden" name="sex" value=<?= $sex ?>>
      <input type="hidden" name="sex" value=<?= $sex ?>>
      <input type="hidden" name="hobby[]" value=<?= in_array("音楽", $hobby) ? "音楽" : "" ?>>
      <input type="hidden" name="hobby[]" value=<?= in_array("映画", $hobby) ? "映画" : "" ?>>
      <input type="hidden" name="hobby[]" value=<?= in_array("ダンス", $hobby) ? "ダンス" : "" ?>>
      <input type="hidden" name="hobby[]" value=<?= in_array("料理", $hobby) ? "料理" : "" ?>>
      <input type="hidden" name="hobby[]" value=<?= in_array("スポーツ", $hobby) ? "スポーツ" : "" ?>>
      <input type="hidden" name="condition_level" value=<?= $condition_level ?>>

      <?php
      // inputデータは一行のみしか入力できない。
      // textareaは非表示にできない。
      // →改行コードを一時的に文字列"\n"に変換してPOST送信する

      // 文頭文末の空白を削除
      $introduce = trim($introduce);
      // 改行コードを統一
      //str_replace ("検索文字列", "置換え文字列", "対象文字列");
      $introduce = str_replace(["\r\n", "\r"], '\n', $introduce);
      ?>
      <input type="hidden" name="introduce" value=<?= $introduce ?>>
      <input type="hidden" name="year" value=<?= $year ?>>
      <input type="hidden" name="month" value=<?= $month ?>>
      <input type="hidden" name="day" value=<?= $day ?>>
      <input type="submit" value="戻る">
    </form>
  </div>
</body>

</html>