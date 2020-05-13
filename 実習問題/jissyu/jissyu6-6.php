<html>
  <head>
    <title>実習18</title>
  </head>
  <body>
<?php

$list =[];

for($i = 1;$i < 10;$i++){
  $list[$i] = rand(0,99);
  numberCheck($list[$i]);
}

function numberCheck($value){
    $firstprize =[0,99];
    $secondprize =[11,22,33,44,55,66,77,88,99];
    $thirdprize = [5,10,15,20,25,30,35,40,45,50,60,65,70,75,80,85,90,95];

    if(in_array($value,$firstprize)){
        echo "{$value}を引きました。1等賞です。<br>",PHP_EOL;       
    }elseif(in_array($value,$secondprize)){
        echo "{$value}を引きました。2等賞です。<br>",PHP_EOL;       
    }elseif(in_array($value,$thirdprize)){
        echo "{$value}を引きました。3等賞です。<br>",PHP_EOL;    
    }else{
        echo "{$value}を引きました。残念ながらハズレです。<br>",PHP_EOL;    
    }
}
?>
  </body>
</html>