<?php

//1
$a = 3;
$b = 7;
echo $a + $b;

//2
$array_month = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];
echo $array_month[7];

//3
$hello = "Hello,";
$name = "Matori";
$world = "'S World!";
echo $hello . $name . $world;

//4
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

//5
$calendar_2018 = [
    "January" => "1月",
    "Feburuaru" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "july" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];

//12月を表示する
echo $calendar_2018["December"];


