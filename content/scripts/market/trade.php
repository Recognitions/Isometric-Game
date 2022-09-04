<?php 
    session_start();
    include('../../host/database.php');
    include('../user.php');

    if($_GET['id']){
        $get_id = $_GET['id'];
        $items_data = mysqli_query($con, "SELECT * FROM users_item WHERE id=$get_id AND for_sale=1");
        $item = mysqli_fetch_assoc($items_data);
        $item_id = $item['item_id'];
        $item_gold = $item['gold'];
        $item_own = $item['owner_id'];
        
        if($gold>$item_gold){
            $update_credits1 = mysqli_query($con, "UPDATE users_credits SET gold=gold-$item_gold WHERE user_id=$user_id");
            $update_credits2 = mysqli_query($con, "UPDATE users_credits SET gold=gold+$item_gold WHERE user_id=$item_own");

            $update_owner = mysqli_query($con, "UPDATE users_item SET owner_id=$user_id,for_sale=0 WHERE id=$get_id");

        }
        header("Location: /market/");
    }


    
?>