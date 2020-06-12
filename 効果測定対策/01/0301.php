<?php
echo "本日の運勢：";
$num = rand(1, 4);
if ($num == 1)
    echo "絶好";
else if ($num == 2)
    echo "好";
else if ($num == 3)
    echo "絶不";
else if ($num == 4)
    echo "不";
echo "調";
