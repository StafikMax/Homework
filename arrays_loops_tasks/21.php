<?php
$count = 0;
$num = 1;
for ($i = 0; $i < 5; $i++){
    echo $num;
    for ($j = 0; $j < $count; $j++){
        echo $num;
    }
    echo "</br>";
    $num++;
    $count++;
}