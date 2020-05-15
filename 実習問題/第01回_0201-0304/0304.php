<?php
function judge()
{
  $sum = 0;
  for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
  }
  return $sum;
};
print judge();
