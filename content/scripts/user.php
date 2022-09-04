<?php 
    $login = $_SESSION['login'];
    if($login){}else{header('Location: ../');}

    $user_data = mysqli_query($con, "SELECT * FROM users_data WHERE email='$login'");
    $user = mysqli_fetch_assoc($user_data);
    $user_id = $user['user_id'];
    $nickname = $user['nickname'];
    $creation = $user['creation'];
    $gender = $user['gender'];

    $user_credits = mysqli_query($con, "SELECT * FROM users_credits WHERE user_id=$user_id");
    $credit = mysqli_fetch_assoc($user_credits);
    $gold = $credit['gold'];
    $token = $credit['token'];
?>