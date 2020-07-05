<?php

//1
$name = "真鳥将一";

if ($name == "真鳥将一"){
    echo "私は" . $name . "です";
}else{
    echo "あなたの名前ではありません";
}
echo "\n";

//2
$cnt = 0;

for ($i = 0; $i <= 10000; $i++){
    $cnt += $i;
}
echo $cnt;
echo "\n";

//3
$fruits = array("apple","orange","banana","grape","melon");

foreach ($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

//4
$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}


?>
