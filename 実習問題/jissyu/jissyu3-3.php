<html>
  <head>
    <title>実習3-3</title>
  </head>
  <body>
  <?php
  $total = 0;
  $i = 1;
  while($i <= 100){
      $total += $i;
      $i++;
    }
    echo "合計は".$total."です<br>",PHP_EOL;
    ?>
  </body>
</html>