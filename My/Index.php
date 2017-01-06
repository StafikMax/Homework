<?php ob_start(); include_once 'Function/core.php';  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link  href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php ob_start(); ?>

    <diw class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="form-group">

                <form action="" method="post" class="form-inline">
                    <input type="hidden" name="logout" value="logout">
                    <label for="button" class="form-group">hello</label><?php echo " {$_SESSION['name']}" ?> <input type="submit" value="logout" id="button" class="btn btn-sm">

                </form>
            </div>
        </div>
    </diw>

<?php if (!isset( $_SESSION['user']))ob_clean(); ?>
<?php ob_start(); ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
            <div class="form-group" >
                <form action="" method="post" class="form-group-sm form-inline" ">

                    <input type="text" name="login" placeholder="Login" class="form-control" >
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <input type="submit" class="btn btn-primary btn-sm">
                    <a href="registration.php" class="btn btn-link">Регистрация</a></br>
                </form>
            </div>
            </div>
        </div>
    </div>
<?php if (isset( $_SESSION['user']))ob_clean(); ?>


<?php ob_start(); ?>
    <div class="row">
        <div class="col-md3">
            <div class="panel-group">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <input type="hidden" name="comment" value="send">
                        <textarea name="massage"  cols="30" rows="2" class="form-control"  id="comment" placeholder="Добавьте коментарий"></textarea>
                        <input type="submit" class="form-control btn btn-primary" >
                    </div>
                </form>
                <?php inspectionUser(); ?>
            </div>
        </div>
    </div>
    <?php if (!isset( $_SESSION['user']))ob_clean();?>
    <?php ob_start(); ?>
    <div class="row">
        <div class="col-md3">
            <div class="panel-group">
                 <?php inspectionUser(); ?>
            </div>
        </div>
    </div>
    <?php if (isset( $_SESSION['user']))ob_clean();?>


</div>
</body>
</html>