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

$name = "藤巻由美";
if ($name == "藤巻由美"){
  echo "私は藤巻由美です" . "\n";
} else {
  echo "藤巻由美ではありません" . "\n";
} 

$total = 0;
echo $total . "\n";

for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total. "\n";

$fruits = array("peach","melon","orange","grape","banana");
foreach($fruits as $a){
  echo "要素は" . $a;
  echo "\n";
}

$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
  if ($i % 5 == 0) {
    echo $i. "\n";
  }
}

