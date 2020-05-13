<?php
function judge()
{
  $sum = 0;
  $count = 0;
  while ($count < 100) {
    $count++;
    $sum += $count;
  }
  return $sum;
};
print judge();
