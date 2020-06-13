<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>確認画面</title>
    <link href="style.css" rel="stylesheet">
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
        require_once "util.php";
        // 表示
        if (preg_match("/.+/", $name))
            echo "こんにちは、", es($name), "さん。<br>", PHP_EOL;
        else
            echo "名前を入力してください。", "<br>", PHP_EOL;
        if (preg_match("/\d+/", $age))
            echo "年齢は", es($age), "です。<br>", PHP_EOL;
        else
            echo "年齢を整数で入力してください。", "<br>", PHP_EOL;
        if (preg_match("/\d{3}-\d{4}$/", $post_num))
            echo "郵便番号は", es($post_num), "です。<br>", PHP_EOL;
        else
            echo "郵便番号を正しく入力してください", "<br>", PHP_EOL;
        // if (isSet($sex))
        echo "性別は", es($sex), "<br>", PHP_EOL;
        // echo "性別にチェックをいれてください", "<br>", PHP_EOL;
        echo "趣味は", implode("と", $hobby), "です。";
        // echo "趣味にチェックをいれてください", "<br>", PHP_EOL;

        ?>

        <!-- input_screen.phpに情報を渡すためのフォーム(項目表示はしない) -->
        <!-- 戻るボタンのみ表示 -->
        <form method="POST" action="input_screen.php" style="display: hidden;">
            <input type="hidden" name="name" value=<?= $name ?>>
            <input type="hidden" name="age" value=<?= $age ?>>
            <input type="hidden" name="post_num" value=<?= $post_num ?>>
            <input type="hidden" name="sex" value=<?= $sex ?>>
            <input type="hidden" name="hobby[]" value=<?= $hobby ?>>
            <input type="submit" value="戻る">
        </form>
    </div>
</body>

</html>