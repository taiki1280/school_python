<?php
$hamburger = 500;   //ハンバーガーの金額を設定
$shake = 200;       //シェイクの金額を設定
$cola = 100;        //コーラの金額を設定
$tip_rate = 0.16;   //チップの設定
$tax_rate = 0.1;    //消費税の設定
$food = $hamburger + $shake + $cola;  //商品の合計金額の計算
$tip = $food * $tip_rate;                   //チップの計算
$tax = $food * $tax_rate;                   //消費税の計算
$total = $food + $tip + $tax;               //合計金額の計算

echo "ハンバーガー：",$hamburger,"円<br>",PHP_EOL;
echo "シェイク　　：",$shake,"円<br>",PHP_EOL;
echo "コーラ　　　：",$cola,"円<br>",PHP_EOL;
echo "税抜き価格　：",$food,"円<br>",PHP_EOL;
echo "チップ　　　：",$tip,"円<br>",PHP_EOL;
echo "税込み金額　：" , $total , "円<br>",PHP_EOL;
?>