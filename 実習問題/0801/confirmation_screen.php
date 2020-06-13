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
        $name = $_GET["name"];
        $password = $_GET["password"];
        $email = $_GET["email"];

        // 表示する
        require_once("util.php");
        echo "氏名：", es($name), "<br>", PHP_EOL;
        echo "パスワード：", es($password), "<br>", PHP_EOL;
        echo "メールアドレス：", es($email), "<br>", PHP_EOL;
        ?>
    </div>
</body>

</html>