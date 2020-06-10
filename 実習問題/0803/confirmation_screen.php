<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>確認画面</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div>
        <form method="GET" action="input_screen.php">
            <?php
            // フォーム入力値の取得
            $name = $_GET["name"];
            $age = $_GET["age"];
            $post_num = $_GET["post_num"];
            require_once("util.php");
            if (preg_match("/.+/", $name))
                echo "年齢は", es($name), "<br>", PHP_EOL;
            else
                echo "名前をで入力してください。", "<br>", PHP_EOL;
            if (preg_match("/\d+/", $age))
                echo "年齢は", es($age), "です。<br>", PHP_EOL;
            else
                echo "年齢を整数で入力してください。", "<br>", PHP_EOL;
            if (preg_match("/\d{3}-\d{4}$/", $post_num))
                echo "郵便番号は", es($post_num), "です。<br>", PHP_EOL;
            else
                echo "郵便番号を正しく入力してください", "<br>", PHP_EOL;
            ?>
            <input type="submit" value="戻る">
        </form>
    </div>
</body>

</html>