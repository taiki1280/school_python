<?php
$school = '東京情報クリエイター工学院専門学校';
$name = '川岸大樹';
show($school, $name);

function show($school, $name)
{
  echo '学校名：' . $school;
  echo "\n";
  echo '名前：' . $name;
}
