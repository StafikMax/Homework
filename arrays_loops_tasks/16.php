<?php
$arr = [1,2,3,4,5,6,7,8,9];
foreach ($arr as $value){
    if($value % 3 == 0 ){
        echo" {$value} ";
        continue;
    }
    echo "{$value}, ";


}
$sym = 123;
$count = count($sym);
echo $count;