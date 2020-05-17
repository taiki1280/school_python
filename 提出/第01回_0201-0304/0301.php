<?php
function judge($fortune)
{
  if ($fortune == 1) {
    return '絶好調';
  } else if ($fortune == 2) {
    return '好調';
  } else if ($fortune == 3) {
    return '不調';
  } else {
    return '絶不調';
  }
}
print judge(rand(1, 4));
