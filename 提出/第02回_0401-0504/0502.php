<?php
// 文字列を1文字ずつ配列に
$array = preg_split("//u", "ハングリーであれ。愚か者であれ。");
// 最初と最後の空配列削除
$array = array_slice($array, 1, -1);
print count($array) . "\n";
// 最初から9文字切り落とし
$new_array = (array_splice($array, 10 - 1));
// 配列全てを出力
for ($i = 0; $i < count($new_array); $i++) {
  print $new_array[$i];
}