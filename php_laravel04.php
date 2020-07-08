<?php

//1
function double($int){
    $int *= 2;
    return $int;
}
echo double(10);
echo "\n";

//2
function add($a,$b){
    $i = $a + $b;
    return $i;
}
echo add(1,2);
echo "\n";

//3
function multiply($arr){
    $int = 1;
    foreach($arr as $a){
        $int *= $a;    
    }
    return $int;
}
echo multiply(array(1,3,5,7,9));
echo "\n";

//4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if( $max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(5,3,8,2,9,1,7,4,6));
echo "\n";

//5
//strip_rags
$str = "<p>techboost</p>";
echo strip_tags($str);
echo "\n";

//array_push
$array = array("0","1st","2nd","3rd");
array_push($array,"4th","5th");
print_r($array);

//array_merge
$array01 = array("0","1st","2nd");
$array02 = array("3rd","4th","5th");
$array03 = array("6th","7th","8th");
print_r(array_merge($array01,$array02,$array03));

//time,mktime
ini_set('date.timezone','asia/tokyo');
$now = time();
$newyear = mktime(0,0,0,1,1,2021);
echo $now;
echo "\n";
echo $newyear;
echo "\n";

//date
$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
$reminingday = ($newyear - $today) / (60 * 60 * 24);
echo "今日は" . date("Y/m/d") . "です";
echo "\n";
echo "今年の残りはあと". $reminingday . "日です";
echo "\n";
