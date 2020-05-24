<?php
$array = array('id' => 100, 'name' => '太郎', 'age' => 19);
$array['age'] += 1;
// 配列要素の数を数える
$count = count($array);
$i = 1;
// 連想配列を表示
echo '{';
foreach ($array as $key => $value) {
    if (gettype($key) == 'string') {
        $key = "'{$key}'";
    }
    if (gettype($value) == 'string') {
        $value = "'{$value}'";
    }
    echo "{$key}: {$value}";
    // 最後以外は実行
    if ($i < $count) {
        echo ', ';
    }
    $i++;
}
echo '}';
