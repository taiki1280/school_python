<?php
// 与えられた文字列
$value = '東京都千代田区神田神保町２丁目１０ー３３';
// 検索する文字列
$word = '千代田区';
// 検索した文字の置換、置換回数カウンターの設置
$replace = str_replace($word,'中央区',$value,$cnt);
print "置換前：{$value}\n";
print "置換後：{$replace}\n";
print "個数：{$cnt}";