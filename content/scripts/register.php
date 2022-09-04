<?php

    include('../host/database.php');
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $creation = date("d/m/y");
    $gender = $_POST['gender'];
    if(!empty($nick)&&!empty($email)&&!empty($pass)){
        $users_data = mysqli_query($con, "INSERT INTO users_data(nickname,email,pass,creation,gender)
        VALUES('$nick','$email','$pass','$creation','$gender')");

        $getId = mysqli_query($con, "SELECT * FROM users_data WHERE email='$email'");
        $myId = mysqli_fetch_assoc($getId);
        $id = $myId['user_id'];

        $link = strtolower($nick);
        $spaces_data = mysqli_query($con, "INSERT INTO spaces_data(owner_id,link,name,description,image,space_size)
        VALUES($id,'$link','Space from $nick','This is my inicial space','/content/media/spaces/default.jpg','10')");

        $users_credits = mysqli_query($con, "INSERT INTO users_credits(user_id,token,gold) 
        VALUES($id,1000,100)");


        $email = $_SESSION['email'];
        header('Location: /profile');
    }else{
        echo 'error';
    }
?>