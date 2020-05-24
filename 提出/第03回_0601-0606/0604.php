<?php
function spring($value)
{
    return ($value == '春');
}
$value_array = [
    'キャベツ' => '春',
    'スイカ' => '夏',
    'ナス' => '秋',
    '白菜' => '冬'
];
?>
<table border="1">
    <caption></caption>
    <tr>
        <th scope="col">野菜</th>
        <th scope="col">季節</th>
    </tr>
    <?php foreach (array_filter($value_array, 'spring') as $key => $value) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach; ?>
</table>