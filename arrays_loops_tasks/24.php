<?php
$num = "336574233";
$numTwo = 2;
$count = mb_strlen($num);
$sum = 0;

for ($i=0;$i<$count; $i++){
     if ($num{$i} == $numTwo ){
         $sum++;
    continue;
    }

}
echo "В  строке '{$num}' {$numTwo}  встречается {$sum} раз(а)" ;