<html>
  <head>
    <title>実習3-2</title>
  </head>
  <body>
<?php
  $atai = rand(1,4);

  switch($atai){
    case 1:
      echo "本日の運勢：絶好調<br>",PHP_EOL;
      break;
    case 2:
      echo "本日の運勢：好調<br>",PHP_EOL;
      break;
    case 3:
      echo "本日の運勢：不調<br>",PHP_EOL;
      break;
    default:
      echo "本日の運勢：絶不調<br>",PHP_EOL;
  }

?>
  </body>
</html>
