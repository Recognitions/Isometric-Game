<?php 
    session_start();
    include('../content/host/database.php');
    include('../content/scripts/user.php');
    

    //$aa = mysqli_query($con, "UPDATE users_credits SET GOLD=10000 WHERE user_id=22");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="info">

        </div>
        <div>
            <div>
                <div>
                    <input type="submit" name="items" class="btn items">
                    <input type="submit" name="spaces" class="btn spaces">
                    
                </div>
                <div>
                    <form action="" method="post">
                    <input type="submit" name="s" class="btn market" value="m">
                    <input type="submit" name="s" class="btn backpack" value="b">
                    <input type="submit" name="s" class="btn trade" value="t">
                </div>    
            </div>
            <div class="list">
                <div>
                    <input type="text" name="search" maxlength="40">
                    </form>
                </div>
            <?php
                if(isset($_POST['s'])){
                    $shop = $_POST['s'];
                    $search = $_POST['search'];
                    if($shop=='m'){
                        $items_data = mysqli_query($con, "SELECT * FROM items_data WHERE name LIKE '%$search%'");
                    }else if($shop=='b'){
                        $items_data = mysqli_query($con, "SELECT * FROM users_item WHERE owner_id=$user_id AND name LIKE '%$search%'");
                    }else if($shop=='t'){
                        $items_data = mysqli_query($con, "SELECT * FROM users_item WHERE owner_id!=$user_id AND for_sale=1 AND name LIKE '%$search%'");
                    }
                }else{
                    $shop = "m";
                    $items_data = mysqli_query($con, "SELECT * FROM items_data");
                }
                while($item = mysqli_fetch_assoc($items_data)){
                    $item_id = $item['item_id'];
                    $item_name = $item['name'];
                    $item_desc = $item['description'];
                    $item_category = $item['category'];
                    $item_token = $item['token'];
                    $item_gold = $item['gold'];
                    $item_icon = $item['icon'];
                    echo "<div class='item'><div>
                        <div><img src='$item_icon'>
                        </div><a>$item_name</a>
                        ";
                    if($shop=='m'){
                        echo "  
                        </div><div><a>GOLD: $item_gold</a>
                        <a href='/content/scripts/market/buy.php?id=$item_id'>
                        VIEW</a></div></div>";
                    }else if($shop=='t'){
                        $sale_id = $item['id'];
                        echo "  
                        </div><div><a>$item_gold</a>
                        <a href='/content/scripts/market/trade.php?id=$sale_id'>
                        BUY</a></div></div>";
                    }else if($shop=='b'){
                        $sale_id = $item['id'];
                        $for_sale = $item['for_sale'];
                        echo "  
                            </div>
                            <div>
                                <a href='/content/scripts/market/sell.php?id=$sale_id'><div class='sale sale$for_sale'></div>
                                </a>
                            </div>
                            </div>";
                    }
                    
                }
            ?>
            </div>
        </div>
    </section>
</body>
</html>