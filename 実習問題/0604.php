<?php
function spring($value)
{
  return ($value == '春');
}
$value_array = ['キャベツ' => '春', 'スイカ' => '夏', 'ナス' => '秋', '白菜' => '冬'];
?>
<table border="1">
  <tr>
    <td>野菜</td>
    <td>季節</td>
  </tr>
  <?php foreach (array_filter($value_array, 'spring') as $key => $value) : ?>
    <tr>
      <td><?= $key ?></td>
      <td><?= $value ?></td>
    </tr>
  <?php endforeach; ?>
</table>