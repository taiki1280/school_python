<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>入力画面</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    $name = $_GET["name"];
    $age = $_GET["age"];
    $post_num = $_GET["post_num"];
    // $name = "";
    // $age = "";
    // $post_num = "";
    ?>
    <div>
        <form method="GET" action="confirmation_screen.php">
            <ul>
                <li>氏名<input type="text" name="name" value=" <?= $name ?>"></li>
                <li>年齢<input type="number" name="age"></li>
                <li>郵便番号<input type="text" name="post_num"></li>
                <li><input type="submit" value="確認"></li>
            </ul>
        </form>

    </div>
</body>

</html>