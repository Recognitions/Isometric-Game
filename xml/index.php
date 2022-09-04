<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Item Creator</title>
</head>
<body>
    <form action="" method="post">
        <b>Tipo de Item</b>
        <select name="formu">
            <option value="custom">Customizado</option>
            <option value="cadeira">Cadeira</option>
        </select>
        <input type="submit" name="dale" value="Base">
    </form>
    <?php
        $ab = ["antique"=>"a","crafting"=>"cra","entrance"=>"e","food"=>"food",
        "gothic"=>"g","hub"=>"hub","lab"=>"l","minis"=>"mini","modern"=>"m",
        "mystery"=>"mystery","outdoor"=>"o","pet"=>"pet","plants"=>"p",
        "scifi"=>"sci","shared"=>"s","urban"=>"u","vip"=>"vip",];
        if(isset($_POST['dale'])){
            $formu = $_POST['formu'];
            if(!empty($formu)){
                include("form/$formu.php");

                if(isset($_POST['custom'])){

                    $folder = $_POST['folder'];
                    $category = $ab[$folder];
            
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $desc = $_POST['desc'];
                    $tags = $_POST['tags'];
                    $dropTargetList = $_POST['dropTargetList'];
                    $price = $_POST['price'];
            
                    $formato = ["png"];
                    $extensao = pathinfo($_FILES['icon']['name'],PATHINFO_EXTENSION);
                    if(in_array($extensao, $formato)){
                        $pasta = "files/";
                        $temporario = $_FILES['icon']['tmp_name'];
                        $namm = explode(" ", $name);
                        $icon = strtolower("icon_".$category."_".$namm[0]."_".$id.".".$extensao);
                        $upar = move_uploaded_file($temporario, $pasta.$icon);
            
                        $temporario2 = $_FILES['png']['tmp_name'];
                        $png = strtolower($category."_".$namm[0]."_".$id.".".$extensao);
                        $upar2 = move_uploaded_file($temporario2, $pasta.$png);
            
                    }else{echo "Formato Inválido";}
            
                    $file = strtolower($category."_".$namm[0]."_".$id);
                    $item = fopen("files/$file.xml", "w") or die("Unable to open file!");
                    $xml = "<item.SpriteItem id=\"$id\" name=\"$name\" desc=\"$desc\" tags=\"$tags\" icon=\"items/base/$folder/$icon\" price=\"$price\" minLevel=\"1\" minCPLevel=\"1\" dropTargetType=\"none\" dropTargetList=\"$dropTargetList\" dropTargetClamp=\"none\">
            
                    </item.SpriteItem>";
                    fwrite($item, $xml);
                    fclose($item);
                    echo "<a href='files/$file.xml'>Download</a>";
                }
            }
        }
    ?>

    <style>
        body{
            background-color: #201222;color:white;font-family:arial;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items:center;
        }form input,select{
            font-size:20px;
            border: 1px solid black;
            color: white;
            padding:10px;
            margin-bottom:2px;
            background-color: rgba(0,0,0,0.5);
            width:500px;
        }form input[type=submit]{
            background-color: rgba(0,0,0,0.7)
        }form select{
            width:522px;
        }
        b{margin-top:5px;}
    </style>
</body>
</html>