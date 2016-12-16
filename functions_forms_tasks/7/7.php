<?php include 'function/function.php';?>
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
<?php
commentAdd($_POST['name'],$_POST['message']);
?>
<form method="POST" action="">
    <labal>Ваше имя</labal>
    <input type="name" name="name" value="Guest"></br>
    <textarea name="message"></textarea>
    <input type="submit" value="submit">

</form>

</body>
</html>









