<?php
$school = "東京情報クリエイター工学院専門学校";
$name = '竹井一馬';
show($school,$name);

function show($school,$name){
    echo "学校名：",$school,"<br>",PHP_EOL;
    echo "名前：",$name,"<br>",PHP_EOL;
}
?>