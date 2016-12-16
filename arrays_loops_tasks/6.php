<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.11.2016
 * Time: 13:19
 */
$arr =['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$ru = [];
$en = [];
foreach ($arr as $key => $value) {
    $ru[] = $key;
    $en[] = $value;

}
print_r($ru);
echo '</br>';
print_r($en);
