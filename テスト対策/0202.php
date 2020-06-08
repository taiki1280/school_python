<?php
$hamburger = 500;
$cola = 100;
$shake = 200;
$total = $hamburger + $cola + $shake;
$tip = $total * 0.16;
$tax = $total * 0.1;
$tax_total = $total + $tip + $tax;

echo "ハンバーガー：{$hamburger}円\n";
echo "シェイク　　：{$cola}円\n";
echo "コーラ　　　：{$shake}円\n";
echo "税抜き価格　：{$total}円\n";
echo "チップ　　　：{$tip}円\n";
echo "税込み価格　：{$tax_total}円\n";
