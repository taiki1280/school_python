<?php
// 与えられた文字列
$value = '東京都千代田区神田神保町２丁目１０ー３３';
// 検索する文字列
$word = '神田';
// 検索した文字位置の取得(index)
$i = mb_strpos($value, $word) + 1;
// それ以降の文字を抽出
$less_word = mb_substr($value, $i - 1);
echo "『{$word}』は『{$value}』の{$i}文字目にあります。\n";
echo "それ以降の文字列は『{$less_word}』です。";