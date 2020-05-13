<html>
  <head>
    <title>実習5-4</title>
  </head>
  <body>
<?php
$msg = "東京都千代田区神田神保町２丁目１０−３３";
$result = str_replace("千代田区","中央区",$msg,$count);
echo "置換前：{$msg}", "<br>",PHP_EOL;
echo "置換後：{$result}", "<br>",PHP_EOL;
echo "個数：{$count}",PHP_EOL;
?>
  </body>
</html>
