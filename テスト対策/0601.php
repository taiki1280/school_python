<?php
$ary = [];
$sum = 0;
$max = 0;
for ($i = 0; $i < 10; $i++) {
    $num = rand(0, 99);
    $ary[$i] = $num;
    $sum += $num;
    if ($max < $num)
        $max = $num;
}
echo "合計は{$sum}です。\n";
echo "最大値は{$max}です。\n";
for ($i = 0; $i < 10; $i++)
    echo "配列[{$i}]：{$ary[$i]}\n";
