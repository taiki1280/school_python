<html>
  <head>
    <title>実習6-1</title>
  </head>
  <body>
<?php

$list =[];
$total = 0;
$max = 0;

for($i = 0;$i < 10;$i++){
  $list[$i] = rand(0,99);
  $total = $total + $list[$i];
  if($list[$i] > $max){
    $max = $list[$i];
  }
}

printf("合計は%dです。<br>",$total);
printf("最大値は%dです。<br>",$max);

for($i = 0;$i < 10;$i++){
  printf("配列[".$i."]：".$list[$i]."<br>",PHP_EOL);
}
?>
  </body>
</html>