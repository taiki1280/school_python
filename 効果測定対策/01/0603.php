<?php
$value_ary = ["キャベツ" => "春", "スイカ" => "夏", "ナス" => "秋", "ハクサイ" => "冬"]
?>

<table border="1">
    <tr>
        <td>野菜</td>
        <td>季節</td>
    </tr>
    <?php foreach ($value_ary as $key => $value) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach ?>
</table>