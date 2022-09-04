<?php
    session_start();
    include("../content/host/database.php");
    include('../content/scripts/user.php');
    include("../content/scripts/spaces/space.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo $image."?width=50&height=50" ?>">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="habbo.css">
    <link rel="stylesheet" href="sw.css">
</head>
<body>
    <section id="canvas">
        <div id="grid"></div>
        <div id="aa"></div>
    </section>
    
    <div id="objs" style="position:absolute;bottom:50px;left:0px; display:flex;">
        <div style="background-image:url(../content/spaces/base/object/ftu_roses.png);" id="objs0"></div>
        <div style="background-image:url(../content/spaces/base/object/ftu_daisies.png);" id="objs1"></div>
        <div style="background-image:url(../content/spaces/base/object/ftu_trashbin.png);" id="objs2"></div>
        <div style="background-image:url(../content/spaces/base/object/star.png);" id="objs3"></div>
        <div style="background-image:url(../content/spaces/base/object/amogu.gif);" id="objs4"></div>
        <div style="background-image:url(../content/spaces/base/object/amogu2.gif);" id="objs5"></div>

    </div>
    <div id="colors" style="position:absolute;bottom:0px;left:0px; display:flex;">
        <?php
            $spaces_textures = mysqli_query($con,"SELECT * FROM spaces_textures WHERE type=1");
            
            while($texture = mysqli_fetch_assoc($spaces_textures)){
                $texture_url = $texture['url'];
                $texture_id = $texture['texture_id'];
        ?>
        <div style="background-image:url(<?php echo $texture_url; ?>);" id="color<?php echo $texture_id; ?>"></div>
        <?php
            }
        ?>
        <button id="closecolors"><</button>
    </div>
    <div id="minimap">
    </div>
    <script><?php include("../content/scripts/spaces/space.js") ?>
        if(<?php echo $owner_id; ?>!=<?php echo $user_id; ?>){
            document.getElementById("colors").innerHTML=""
        }
    </script>

    <style>
        *{
            outline: none;
        }
        #canvas{
            position:absolute;
            width:100%;
            height:100%;
            background-color: black;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        #grid{
            --rotate: -45deg;
            --skew1: 15deg;
            --skew2: 15deg;
            transform: rotate(var(--rotate)) skew(var(--skew1), var(--skew2));
        }#tile{
            display: flex;
            justify-content: center;
        }
        #tile:hover{
            box-shadow:inset 0px 0px 20px 50px rgba(255,255,255,0.3);
        }
        #tile{
            background-size:100%;
            background-position: center;
            background-repeat:no-repeat;
        }
        #minimap{
            top:5px;
            left:5px;
            height:0px;
            width:0px;
            height:0px;
            position:absolute;
        }#minimap div{
            display: flex;
            justify-content:center;
            align-items: center;
        }
        #colors div{
            width:40px;
            height:40px;
            background-size:100%;
            background-repeat: no-repeat;
            border: 2px solid gray;
        }#colors div:hover{
            box-shadow:inset 0px 0px 20px 50px rgba(255,255,255,0.3);
        }#colors div:active{
            box-shadow:inset 0px 0px 20px 50px rgba(100,50,50,0.3);
        }#colors button{
            border: 0px;
            background-color :transparent;
            font-size:20px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #objs div{
            width:40px;
            height:40px;
            background-size:100%;
            background-repeat: no-repeat;
            border: 2px solid gray;
        }#objs div:hover{
            box-shadow:inset 0px 0px 20px 50px rgba(255,255,255,0.3);
        }#objs div:active{
            box-shadow:inset 0px 0px 20px 50px rgba(100,50,50,0.3);
        }
        #elem{
            background-repeat: no-repeat;
            background-position: bottom;
            position:absolute;
            top:-35px;
            left:25px;
            background-size:100%;
            width:60px;
            height:60px;
            transform: rotate(45deg) scale(1.5,3);
        }#elem:hover{
            opacity: 0.5;
            box-shadow: none !important;
        }#el{
            background-color: white;
        }
    </style>

    <div style="position:absolute;right:0px;top:0px;color: white; text-align:right;">
        <b>Token: <?php echo $token; ?></b><br>
        <b>Gold: <?php echo $gold; ?></b>
    </div>
    

    
    <div id="sombra"></div>
    <script>history.pushState({},"/space/index.php//?id=<?php echo $url; ?>","../space/<?php echo $url ?>")</script>
</body>
</html>