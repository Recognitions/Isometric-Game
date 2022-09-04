<?php 
    session_start();
    include('../content/host/database.php');
    include('../content/scripts/user.php');
    
    $users_data = mysqli_query($con, "SELECT * FROM users_data WHERE email='$login'");
    $user = mysqli_fetch_assoc($users_data);
    $id = $user['user_id'];
    $nickname = $user['nickname'];
    $creation = $user['creation'];
    $users_credits = mysqli_query($con,"SELECT * FROM users_credits WHERE user_id=$id");
    $credits = mysqli_fetch_assoc($users_credits);
    $token = $credits['token'];
    $gold = $credits['gold'];

    $spaces_data = mysqli_query($con, "SELECT * FROM spaces_data WHERE owner_id=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nickname; ?>'s Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="pages">
            <a href="./profile/"><button class="btn">Home</button></a>
            <a href="./market/"><button class="btn">Mercado</button></a>
            <a href="./community/"><button class="btn">Comunidade</button></a>
            <a href="./shop/"><button class="btn">Loja</button></a>
            <a href="./redeem/"><button class="btn">Resgatar</button></a>
            <a href="./help/"><button class="btn">Ajuda</button></a>
        </div>
        <div class="second_area">
            <div class="credits">
                <a>1</a>
                <a><?php echo $gold ?></a>
                <a><?php echo $token ?></a>
            </div>
            <div class="out">
                <a href="../content/scripts/logout.php"><button>X</button></a>
            </div>
        </div>
    </header>
    <section class="body">
        <div class="avatar">
            
            <div class="avatar_area">
                <div class="tags">
                    <b>Plebeu</b><br>
                    <a><?php echo $nickname; ?></a>
                </div>
                <div class="avatar_image" style="background-image: url(https://media.discordapp.net/attachments/914616752443383851/954985681741045810/5HNzLhLiF6Z_snap.png);"></div>
                <label><?php echo "Cidadão desde: $creation"; ?></label>
            </div>
            <div class="avatar_levels">
                <table>
                    <thead>
                        <tr>
                            <th>Principal</th>
                            <th>Social</th>
                            <th>Trading</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><hr>
        <div class="activites">
            <h1>Seus Espaços</h1><hr>
            <div class="spaces">
                <?php while($space = mysqli_fetch_assoc($spaces_data)){?>
                    <a href="../space/<?php echo $space['link']; ?>"><button style="background-image: url(<?php echo $space['image']; ?>);"><?php echo substr($space['name'],0,16); ?></button></a>
                <?php }?>
            </div>
        </div>
    </section>
    <footer></footer>
    
</body>
</html>