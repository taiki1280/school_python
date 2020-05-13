<html>
  <head>
    <title>実習4-1</title>
  </head>
  <body>
<?php
  
  
  $atai = calculate();

  if($atai == 1){
      echo "本日の運勢：絶好調<br>",PHP_EOL;;
  }
  else if($atai == 2){
      echo "本日の運勢：好調<br>",PHP_EOL;;
  }else if($atai ==3){
      echo "本日の運勢：不調<br>",PHP_EOL;;
  }else{
      echo "本日の運勢：絶不調<br>",PHP_EOL;;
  }

  function calculate(){
      $atai = rand(1,4);
      return $atai;
  }
?>
  </body>
</html>
