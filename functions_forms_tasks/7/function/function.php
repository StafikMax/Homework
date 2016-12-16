<?php
require_once '7.php';
function commentAdd($name,$comment){
    if ( empty($comment) || empty($name) || censor()) {

        return commentPrint();
    }
    $file = file_get_contents('massage.txt');
    $arr = (json_decode($file, true));
    $arr[] = ['name' => $name, 'massage' => $comment];
    file_put_contents('massage.txt', json_encode($arr));
    return commentPrint();
}
function commentPrint(){
       if(file_get_contents('massage.txt')) {
           $massage = json_decode(file_get_contents('massage.txt'), true);
           foreach ($massage as $value) {
               foreach ($value as $key => $comment) {
                   echo "$comment";
                   if ($key === 'massage') {
                       echo '<hr>';
                   }
                   if ($key === 'name') {
                       echo ':' . '</br>';
                   }

               }
           }
       }
}

function censor (){
 $arrCensore = ['маты','разные'];
    $comment = explode(' ',$_POST['message']);
    foreach ($arrCensore as $value){
        foreach ($comment as $valueTwo){
            if($value === $valueTwo){
                return true;
            }

        }
    }
return false;

}





