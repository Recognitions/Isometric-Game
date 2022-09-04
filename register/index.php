<form action="../content/scripts/register.php" method="post" enctype="multipart/form-data">
    <input name="nick" type="text" placeholder="Nickname" require><br>
    <input name="email" type="email" placeholder="Email" require><br>
    <input name="pass" type="password" placeholder="Password" require><br>

    <input type="radio" id="m" name="gender" value="m" checked>
    <label for="m">Masculino</label>
    <input type="radio" id="f" name="gender" value="f">
    <label for="f">Feminino</label>

    <button name="submit" type="submit">Complete</button>
</form>
<?php
    session_start();
    $login = $_SESSION['login'];
    if($login){header('Location: /profile');}
?>