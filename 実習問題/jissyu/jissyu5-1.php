<html>
  <head>
    <title>実習5-1</title>
  </head>
  <body>
<?php
  
  $radius = 3;
  $pi = pi();

  $circfer_answer = circfer($radius,$pi);
  $area_answer = area($radius,$pi);

  printf("半径は%dです。<br>",$radius,PHP_EOL);
  printf("円周率は%fです。<br>",$pi,PHP_EOL);
  printf("円周は%.3fです。<br>",$circfer_answer,PHP_EOL);
  printf("面積は%.3fです。",$area_answer,PHP_EOL);

  function circfer($radius,$pi){
    $circfer_answer = ($radius * 2) * $pi;
    return $circfer_answer;
  }

  function area($radius,$pi){
    $area_answer = $radius * $radius  * $pi;
    return $area_answer;
  }

?>
  </body>
</html>
