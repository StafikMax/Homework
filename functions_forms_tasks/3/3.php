

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
<form action="" method="">
    <textarea name="stringOne" id="" cols="30" rows="10"></textarea>
    <input type="submit"  >
</form>
</body>
</html>
<?php

const FILE_PUTH = "text.txt";

    $num = isset($_GET['stringOne'])?$_GET['stringOne']:PHP_INT_MAX;


$file = file_get_contents(FILE_PUTH);
$arr = explode(" ",$file);


foreach ($arr as $key => $value){
    if (mb_strlen($value) > $num ){
        unset($arr[$key]);
    }

}
file_put_contents(FILE_PUTH,implode(" ",$arr));
$file = file_get_contents(FILE_PUTH);
if (empty($file{0})){
echo "фаил пустой";
exit;
}
echo "<b>Слова в файле:</b></br>";
echo $file;








