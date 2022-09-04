<!--
<form action="" method="post" enctype="multipart/form-data">
    <input name="login" type="text" placeholder="Nickname or Email" require><br>
    <input name="pass" type="password" placeholder="Password" require><br>
    <button name="submit" type="submit">Login</button>
</form>
<?php 
    session_start();
    include('./content/host/database.php');
    if(isset($_POST['submit'])){include('./content/scripts/login.php');}
?>
-->

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Signals</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="content/media/website/css/login.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">Login</span>
                <form action="" method="post" enctype="multipart/form-data" class="login100-form validate-form p-b-33 p-t-5">
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="login" placeholder="E-mail">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="pass" placeholder="Senha">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button name="submit" class="btn login">Jogar</button>
                        <button name="" class="btn regis">Registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</body>
</html>
