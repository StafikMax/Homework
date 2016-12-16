<?php


$string = "Привет!";
$count = 0;
while(!empty($string{$count}) ){
    echo $string{$count};
    $count ++;
}
echo $count;