<?php

$raidus = 3;
$pi = PI();
$circfer = circfer($raidus, $pi);
$area = area($raidus, $pi);
function circfer($raidus, $pi)
{
  return 2 * $raidus * $pi;
}

function area($raidus, $pi)
{
  return $raidus ** 2 * $pi;
}

printf("半径は%dです。\n", $raidus);
printf("円周率は%.6fです。\n", $pi);
printf("円周は%.3fです。\n", $circfer);
printf("面積は%.3fです。", $area);
