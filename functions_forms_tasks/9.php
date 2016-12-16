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
9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
<form action="">
    <input type="text" name="string">
    <input type="submit">
</form>

<?php

function reverse($string)
{

    function countString($stringCount)
    {
        $count = 0;
        while (!empty($stringCount{$count})) {
            echo $stringCount{$count};
            $count++;
        }
        return $count;
    }
    if (isset($_GET['string'])) {
        $count = countString($_GET['string']);
    }
     if(isset($_GET['string'])) {
      $word = $_GET['string'];

    while ($count  >=0){
     echo  $word{$count};
    $count--;
    }
  }

}
if(isset($_GET['string']) && !empty($_GET['string']))  {
    reverse($_GET['string']);
}

?>


</body>
</html>