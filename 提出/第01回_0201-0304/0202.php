<?php
$hamburger = "500";
$shake = "200";
$cola = "100";
$non_taxed_price = $hamburger + $shake + $cola;
$tip = 0.16 * $non_taxed_price;
$taxed_price = 0.1 * $non_taxed_price + $non_taxed_price + $tip;

print "ハンバーガー：{$hamburger}円\n";
print "シェイク　　：{$shake}円\n";
print "コーラ　　　：{$cola}円\n";
print "税抜き価格　：{$non_taxed_price}円\n";
print "チップ　　　：{$tip}円\n";
print "税込み金額　：{$taxed_price}円\n";
