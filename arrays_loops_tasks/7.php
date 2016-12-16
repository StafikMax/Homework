<?php
$arr = [2,5,9,15,0,4];
foreach ($arr as $value => $key){
    if($key > 3 && $key < 10){
        echo $key;
        echo '</br>';
    }

}