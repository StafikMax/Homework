<?php



function listDir($dir){
    $list = scandir($dir);
    foreach ($list as $vars){
        echo $vars.'</br>';
    }
}

listDir('c:/');