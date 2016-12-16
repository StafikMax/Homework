<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <textarea name="stringOne" id="" cols="30" rows="10"></textarea>
    <input type="submit"  >
</form>
</body>
</html>
<?php

$a = isset($_GET['stringOne'])?$_GET['stringOne']:null;

function getCommonWords($a){
    $arrStringOne = explode(' ',$a);
    $arr =[];

    foreach ($arrStringOne as $value){
           $arr[] = $value;
    }


    return array_unique($arr);
}


function SortArray($a,$b){
    if(strlen($a) == strlen($b)){
        return 0;
    }
    return (strlen($a) > strlen($b)) ? -1 : 1;
}

$arr = getCommonWords($a);
usort($arr, "SortArray");

for ($i = 0; $i < 3; $i++){
    if(!empty($arr[$i])) echo $arr[$i]." ";

}















