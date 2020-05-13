<?php
function calculate()
{
  return rand(1, 4);
}
$fortune = calculate();
if ($fortune == 1) {
  print '絶好調';
} else if ($fortune == 2) {
  print '好調';
} else if ($fortune == 3) {
  print '不調';
} else {
  print '絶不調';
}
