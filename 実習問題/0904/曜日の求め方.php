<?php
// 年月日
$year = 2020;
$month = 6;
$day = 14;

$datetime = new DateTime();
$datetime->setDate($year, $month, $day);
$week = array("日", "月", "火", "水", "木", "金", "土");
$w = (int) $datetime->format('w');
echo $week[$w];
