<?php
$arr = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

foreach ($arr as $key=> $value){
    if($key > 4){
        echo "<b>".$value."</b></br>";
        continue;
    }

    echo $value."</br>";

}


