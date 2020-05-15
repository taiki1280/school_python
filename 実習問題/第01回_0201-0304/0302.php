<?php
function judge($fortune)
{
  switch ($fortune) {
    case "1":
      return '絶好調';
      break;
    case "2":
      return '好調';
      break;
    case "3":
      return '不調';
      break;
    case "4":
      return '絶不調';
      break;
  }
}
print judge(rand(1, 4));
