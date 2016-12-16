<?php
$test = "D:\php\Git\php_basics_tasks";
$text = "php";



function listDir($dir,$word) {
$list = scandir($dir);
    foreach ($list as $vars) {
        if(is_dir($dir.DIRECTORY_SEPARATOR.$vars) ){
            continue;
        }
        if(stripos(file_get_contents($dir.DIRECTORY_SEPARATOR.$vars),$word) !== false){
           echo "{$vars}</br>";
        }
    }
}


listDir($test,"$text");