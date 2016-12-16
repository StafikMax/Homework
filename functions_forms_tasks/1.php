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
    <textarea name="stringTwo" id="" cols="30" rows="10"></textarea>
    <input type="submit"  >
</form>
</body>
</html>

<?php

$a = isset($_GET['stringOne'])?$_GET['stringOne']:null;
$b = isset($_GET['stringTwo'])?$_GET['stringTwo']:null;

function getCommonWords($a, $b){
    $arrStringOne = explode(' ',$a);
    $arrStringTwo = explode(' ',$b);
    $arr =[];

    foreach ($arrStringOne as $value){
        foreach ($arrStringTwo as $valueTwo)
        {
            if($value === $valueTwo){
                $arr[] = $value;

            }
        }
    }


    return array_unique($arr);
}

$array = getCommonWords($a,$b);

if (!empty($array)&&$array[0] !== '') {
    echo "Общие слова элементов textarea</br>";
    foreach ($array as $value){
        echo $value.'</br>';
    }
}
else{
    echo "Совпадений слов не найдено</br>";
    exit;
}
echo "</br>Введите текст для сравнения ";






?>
