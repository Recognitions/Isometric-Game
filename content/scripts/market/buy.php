<?php 
    session_start();
    include('../../host/database.php');
    include('../user.php');

    if($_GET['id']){
        $get_id = $_GET['id'];
        $items_data = mysqli_query($con, "SELECT * FROM items_data WHERE item_id=$get_id");
        $item = mysqli_fetch_assoc($items_data);
        $item_id = $item['item_id'];
        $item_name = $item['name'];
        $item_desc = $item['description'];
        $item_category = $item['category'];
        $item_token = $item['token'];
        $item_gold = $item['gold'];
        $item_icon = $item['icon'];
        
        if($gold>$item_gold){
            $value = $gold-$item_gold;
            $update_credits = mysqli_query($con, "UPDATE users_credits SET gold=$value WHERE user_id=$user_id");

            $buy_item = mysqli_query($con, "INSERT INTO users_item(item_id,name,description,category,token,gold,icon,owner_id)
            VALUES($item_id,'$item_name','$item_desc',$item_category,$item_token,$item_gold,'$item_icon',$user_id)");
    
        }
        header("Location: /market/");
    }


    
?>