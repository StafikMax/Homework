<?php
include_once 'function.php';
session_start();
//создаем нужные файлы если их нет
crateFile();
// создать сессию пользователя
if (isset($_POST['login']) && isset($_POST['password'])) {
    if (validUser($_POST['login'], $_POST['password'])) {
        $_SESSION['user'] = $_POST['login'];
    }
}
//вызов функции добовления коментария
if(isset($_POST['comment']) && $_POST['comment'] == 'send'){
    addComment($_POST['massage'],$_SESSION['name']);
}
//
if (isset($_POST['logout'])) {
     logout();
};
//
if(isset($_POST['checkbox'])){
   $a = array_diff($_POST,array('checkbox'=>'','submit'=>'show'));
   hideShowComment($a);
}

if (isset($_POST['registration'])){
    registration($_POST['userlogin'],$_POST['password'],$_POST['username']);
}
if(isset($_POST['blacklist'])){
    blackListEdit($_POST['censor']);

}



//registration('admin', 'admin', 'Maxim');
