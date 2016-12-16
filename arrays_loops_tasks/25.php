<?php
$arr = [];
$rand = rand(3,10);
for ($i=0;$i <$rand;$i++){
    $arr[$i] = rand(0,100);
}
$count = count($arr);
$backArr = $arr;
print_r($backArr);
sort($arr);
$low = $arr[0];
$top = $arr[$count - 1];
foreach ($backArr as $key => $value){
   switch ($value){
       case $top;
           $backArr[$key] = $low;
           break;
       case $low;
           $backArr[$key] = $top;
           break;
   }
}
echo"</br>";
print_r($backArr);
echo "min {$low},max {$top}";
