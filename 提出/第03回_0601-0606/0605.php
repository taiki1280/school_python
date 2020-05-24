<?php
// 最小値の変数初期化
$min = 0;
// 合計値の変数初期化
$sum = 0;

// -99～99までの乱数を10個配列に代入、合計値、最小値取得
for ($i = 1; $i <= 10; $i++) {
    // 乱数を取得
    $value = random_int(-99, 99);
    $array[] = $value;
    $sum += $value;
    if ($min > $value) {
        $min = $value;
    }
}
// 昇順にソート
asort($array);

// 表示
echo "合計は{$sum}です。\n";
echo "最小値は{$min}です。\n";
foreach ($array as $i => $value) {
    echo "配列[{$i}]：{$value}\n";
}
