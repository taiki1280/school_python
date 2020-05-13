<html>
  <head>
    <title>実習6-5</title>
  </head>
  <body>
<?php

$list =[];
$total = 0;

$list[0] = rand(-99,99);
$total = $total + $list[0];
$min = $list[0];

for($i = 1;$i < 10;$i++){
  $list[$i] = rand(-99,99);
  $total = $total + $list[$i];
  if($list[$i] < $min){
    $min = $list[$i];
  }
}

sort($list);

printf("合計は%dです。<br>",$total);
printf("最小値は%dです。<br>",$min);

for($i = 0;$i < 10;$i++){
  printf("配列[".$i."]：".$list[$i]."<br>",PHP_EOL);
}
?>
  </body>
</html>