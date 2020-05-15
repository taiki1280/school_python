<?php

// 0～99までの乱数を10個配列に代入、合計値、最大値取得
for ($i = 1; $i <= 10; $i++) {
  // 乱数を取得
  $value = random_int(0, 99);
  $array[] = $value;
}

// １等賞、２等賞、３等賞の配列作成
for ($v = 0; $v <= 99; $v++) {
  if ($v == 0 || $v == 9)
    $rank_one[] = $v;
  else if ($v % 11 == 0)
    $rank_two[] = $v;
  else if ($v % 5 == 0)
    $rank_three[] = $v;
}

// 当たり外れ判定
function judge($value)
{
  // 上記の関数外の変数を使用
  global $rank_one,$rank_two,$rank_three;
  if (in_array($value, $rank_one))
    return '1等賞';
  else if (in_array($value, $rank_two))
    return '2等賞';
  else if (in_array($value, $rank_three))
    return '3等賞';
  else
    return '残念ながらハズレ';
}

// 表示
foreach ($array as $value){
  $result = judge($value);
  echo "{$value}を引きました。{$result}です。\n";
}
