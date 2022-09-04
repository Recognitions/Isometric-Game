<?php 
    $url = $_GET['id'];
    $spaces_data = mysqli_query($con, "SELECT * from spaces_data WHERE link='$url'");
    $space = mysqli_fetch_assoc($spaces_data);
    if((!$url)Or$url!=$space['link']){header('Location: /profile/');}

    $owner_id = $space['owner_id'];
    $name = $space['name'];
    $link = $space['link'];
    $image = $space['image'];
    $space_size = $space['space_size'];
    $tiles = $space['tiles'];
?>