<?php
$arr = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
$day = $arr[2];
foreach ($arr as $key => $value) {
    if ($value === $day) {
        echo "<i>{$day}</i></br>";
        continue;
    }
        echo $value . "</br>";
}