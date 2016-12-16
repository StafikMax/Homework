<?php
$e = 3;
$arr = [4,2,5,19,13,0,10];
 foreach ($arr as $value ){
     if ( $e == $value ){
         echo "Есть!";
         exit;
     }
 }
echo "Нет!";
