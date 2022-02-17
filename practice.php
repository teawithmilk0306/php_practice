<?php
echo 'hello php!' . "\n";


$a = 3;
$b = 7;
echo $a + $b . "\n";

$array_month = ["January", "February", "March", "Aplil", "May", "June", "July", "August", "September","October", "December"];
echo $array_month[7] . "\n";

$integer = 20;
echo $integer . "\n";

$a = 3;
$b = 7;
echo $a + $b . "\n";

echo $integer . "\n";

$hello = "Hello ";
$name = "yumi";
$world ="'s World!";
echo $hello .$name .$world . "\n";

$tech_boost = 'tech';
$tech_boost .= '_boost' . "\n";
echo $tech_boost . "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"] . "\n";