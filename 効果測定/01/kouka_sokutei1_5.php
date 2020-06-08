<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$array = [
    "青森" => 124.9,
    "岩手" => 122.9,
    "秋田" => 96.9,
    "宮城" => 230.6,
    "山形" => 108,
    "福島" => 184.8,
]
?>

<body>
    <h1>東北６県基本情報</h1>
    <table border="1">
        <tr>
            <td>県名</td>
            <td>人口</td>
        </tr>
        <?php foreach ($array as $key => $value) : ?>
            <tr>
                <td><?= $key ?>県</td>
                <td><?= $value ?>万人</td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>