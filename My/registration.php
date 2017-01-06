<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top: 150px">
    <div class="row">

        <div class="col-md-3 col-md-offset-4">
            <div class="well well-lg">
                <?php include_once 'Function/core.php';?>
                <form action="" method="post" class="form-group-sm">

                    <input type="hidden" name="registration">
                    <div class="form-group">
                        <label for="">Введите имя</label>
                        <input type=text" name="username" id="registration" class="form-control" required>


                        <label for="registration">Введите логин</label>
                        <input type="text" name="userlogin" id="userlogin" class="form-control" required>

                    <label for="registration">Введите пароль</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="formgroup">
                        <input type="submit" value="Регистрация" class="form-control btn btn-primary">
                        <a href="index.php" class="btn btn-link form-control">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>