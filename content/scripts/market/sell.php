<?php 
    session_start();
    include('../../host/database.php');
    include('../user.php');

    if($_GET['id']){
        $get_id = $_GET['id'];
        $items_data = mysqli_query($con, "SELECT * FROM users_item WHERE id=$get_id");
        $item = mysqli_fetch_assoc($items_data);
        $item_id = $item['item_id'];
        $for_sale = $item['for_sale'];
        
        if($for_sale==1){
            $update_owner = mysqli_query($con, "UPDATE users_item SET for_sale=0 WHERE id=$get_id");
        }else{
            $update_owner = mysqli_query($con, "UPDATE users_item SET for_sale=1 WHERE id=$get_id");
        
        }
        header("Location: /market/");
    }


    
?>