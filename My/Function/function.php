<?php
function registration($login, $password, $name)
{
    if (isset($login) && isset($password) && isset($name)) {
        $arrUser = json_decode(file_get_contents('user.json'), true);
        //проверить существует ли пользователь если фаил не пустой.
        if (count($arrUser) > 0) {
            foreach ($arrUser as $value)
                if ($value['login'] == $login) {
                    echo "<p class=\"bg-danger\">Пользователь существует</p>";
                    return;
                }
        }
        $arrUser[] = ['login' => $login, 'password' => $password, 'name' => $name];
        file_put_contents('user.json', json_encode($arrUser));
        header('Location:index.php');
        $_SESSION['user'] = $_POST['userlogin'];
        $_SESSION['name'] = $_POST['username'];
    }

}
//создает нужные файлы и заводит пользователя admin с паролем  admin
function crateFile(){
    if (!file_exists('user.json')) {
        file_put_contents('user.json', '');
        registration('admin', 'admin', 'Maxim');
    }
    if (!file_exists('comment.json')) {
        file_put_contents('comment.json', '');
     }
}
//проверяем существует ли пользователь
function validUser($login = null, $password = null)
{
   $userArr = json_decode(file_get_contents('user.json'), true);
    foreach ($userArr as $value) {
        if ($value['login'] == $login && $value['password'] == $password) {
            $_SESSION['name'] = $value['name'];
            return true;
        }
    }
    return false;
}
function logout()
{
    unset($_SESSION['user']);
    session_destroy();
}
//прячим коментаии
function hideShowComment($hideShow){
    $arrComment = json_decode(file_get_contents('comment.json'), true);
    if(count($arrComment) ==  0) return;
    foreach ($arrComment as $comment => $show){
        $arrComment[$comment]['show']='hide';
    }
    foreach ($hideShow as $key =>$value){
        $arrComment[$key]['show']='show';
        }
    file_put_contents('comment.json',json_encode($arrComment));
}
/////////////////
//ищем запрещенные слова
function comparison($wordArr)
{
    $censorList = array_map("mb_strtolower",json_decode(file_get_contents('censor.json'), true));
    $count = count($censorList);
    if ($count > 0) {
        foreach ($censorList as $value) {
            if (mb_strtolower($wordArr) === $value) {
                $wordArr = '"ЦЕНЗУРА"';
            }
        }
        return $wordArr;
    }
    return $wordArr;
}
//Заменяем запрещенные слова
function censor($lineInspectIn)
{
    $arrayCensor = array_diff(array_map('trim', explode(" ", $lineInspectIn)),['']);
    $arr = array_map('comparison', $arrayCensor);
    $arr = implode(" ", $arr);
    return $arr;
}
//добавить коментарий
//$show показать коментарий после добавления 'show' не показывть 'hide'
function addComment($massage, $user, $show = 'show')
{
       if (!empty($massage)) {
        $arrComent = json_decode(file_get_contents('comment.json'), true);
        $arrComent[] = ['name' => $user, 'massage' => $massage, 'show' => $show,'time' => time()];
        file_put_contents('comment.json', json_encode($arrComent));
        header('Location:index.php');
    }
}
// показать коментарии
function showComment()
{    $arrComent = json_decode(file_get_contents('comment.json'), true);
    date_default_timezone_set("Europe/Kiev");
         if (count($arrComent) > 0) {
                foreach ($arrComent as $value) {
                     if ($value['show'] === 'hide') {
                         continue;
                    }
                    echo "<div class='panel panel-default'>";
                    foreach ($value as $key => $comment) {
                        if ($key === 'massage') {

                            echo "<div class='panel-body'>".censor($comment)."</div>";

                        }
                        if ($key === 'name') {
                            echo "<div class='panel-heading'>{$comment}: ".date('Y-m-d h:i',$value['time'])."</div>";

                        }
                    }
                    echo "</div>";
                }
            }



}
//вывод Админчасти
function blackListEdit($add = null){
    if(isset($add)){
         file_put_contents("censor.json",json_encode(array_diff(explode(" ",$add),[""])));
        header('Location:index.php');
        return;
    }

    $blacklist = implode(' ',json_decode(file_get_contents("censor.json"),true));
    $html = "<form action=''method='post'>
    <div class='form-group'>
    <label for='blacklist'>Добавьте/Удалите заперещенные слова в антимат через пробел (регистро не чуствителен)</label>
    <input type='hidden' name='blacklist'>
    <textarea name='censor'  cols='30' rows='2' class='form-control'  id='blacklist'>$blacklist</textarea>
    <input type='submit' class='form-control btn btn-primary' >
    </div>
    </form>";
echo $html;


}
function showAdminComent(){
            $arrComent = json_decode(file_get_contents('comment.json'), true);
            $html = "<form action=''; method='post'><input name='checkbox'  type='hidden'/><table class='table' >
                        <tr>
                        <th>Имя</th><th>Коментарий</th><th>Время</th><th>Показать/Скрыть</th>
                        </tr>";
            if (count($arrComent) > 0) {
                foreach ($arrComent as $key => $value) {
                    $html .= "\n<tr>\n";
                    $checked = ($value['show'] === 'show') ? 'checked' : '';
                    foreach ($value as $key1 => $massage) {

                        if ($key1 == 'massage') {

                            $html .= "<td>" . $value['massage'] . "</td>";
                        }
                        if ($key1 == 'time') {
                            $html .= "<td>" . $value['time'] . "</td>";
                        }
                        if ($key1 == 'name') {
                            $html .= "<td>" . $value['name'] . "</td>";
                        }

                    }
                    $html .= "<td ><input name='$key' type='checkbox' $checked/></td>";
                    $html .= "\n</tr>";
                }

            }
            $html .= "\n</table><input name='submit' type='submit' value='show' class='form-control btn btn-warning'/></form>";
            echo $html;

}
//определяем кому что выводить
function inspectionUser(){
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'guest';
    switch ($user){
        case 'admin':

            showAdminComent();
            blackListEdit();
            break;
        default:
            showComment();



    }
}




