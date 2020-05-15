<?php
// 最大値の変数初期化
$max = 0;
// 合計値の変数初期化
$sum = 0;

// 0～99までの乱数を10個配列に代入、合計値、最大値取得
for ($i = 1; $i <= 10; $i++) {
  // 乱数を取得
  $value = random_int(0, 99);
  $array[] = $value;
  $sum += $value;
  if ($max < $value)
    $max = $value;
}

// 表示
echo "合計は{$sum}です。\n";
echo "最大値は{$max}です。\n";
foreach ($array as $i => $value)
  echo "配列[{$i}]：{$value}\n";