<?php

$result = 0;
echo "</br>";
$arrayThree = [26,17,136,12,79,15];
foreach ($arrayThree as $vars){
    $result += $vars * $vars;
}
echo $result;