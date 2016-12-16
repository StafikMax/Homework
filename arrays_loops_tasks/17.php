<?php
$month = date('F');
$arr = ['January','February','March','April','May','June','July','August','September','October', 'November','December'];
    foreach ($arr as $key => $value){
        if($value === $month){
            echo "<strong>{$month}</strong></br>";
            continue;
        }
        echo $value."</br>";

    
    }


