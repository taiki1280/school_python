<html>
  <head>
    <title>実習5-3</title>
  </head>
  <body>
<?php

function check($target, $search_word){
  $result = mb_strpos($target, $search_word);
  if($result === false){
    echo "『{$search_word}』は『{$target}』には含まれていません。<br>",PHP_EOL;
  } else {
    $result++;
    echo "『{$search_word}』は『{$target}』の{$result}文字目にあります。<br>",PHP_EOL;
  }
}

function pickout($target, $search_word){
  $result = mb_stristr($target, $search_word);
  if($result === false){
    echo "(not found)<br>",PHP_EOL;
  } else {
    echo "それ以降の文字列は『{$result}』です。<br>",PHP_EOL;
  }
}

$msg = "東京都千代田区神田神保町２丁目１０−３３";
$search_word = "神田";

check($msg,$search_word);
pickout($msg,$search_word);
?>
  </body>
</html>
