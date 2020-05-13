<html>
  <head>
    <title>実習5-2</title>
  </head>
  <body>
<?php
$msg = "ハングリーであれ。愚か者であれ。";
echo "文字数は",mb_strlen($msg),"です。<br>",PHP_EOL;
echo "10文字目からの文章は【",mb_substr($msg,9),"】です。<br>",PHP_EOL;
?>
  </body>
</html>
