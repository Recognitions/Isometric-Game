<?php
    session_start();
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    $users_data = mysqli_query($con, "SELECT * FROM users_data WHERE email='$login' and pass='$pass'");
    $user = mysqli_fetch_assoc($users_data);
    $user_id = $user['user_id'];
    if(mysqli_num_rows($users_data)>0){
        $_SESSION['login'] = $login;
        header('Location: ./profile');}else{header('Location: ./');}
?>