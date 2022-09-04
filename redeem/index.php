<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="menu">
        <div>
            <div class="topBar">
                <a class="menuName">Resgatar Códigos MiniMania</a>
                <button class="close"><b>X</b></button>
            </div><hr>
        </div>
        <div>
            <div class="content">
                <?php
                    function senha($tamanho){$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";for($i=0;$i<4;$i++){$p1 = substr(str_shuffle($str),0,$tamanho)."-";$p2 = substr(str_shuffle($str),0,$tamanho)."-";$p3 = substr(str_shuffle($str),0,$tamanho)."-";$p4 = substr(str_shuffle($str),0,$tamanho);$key = $p1.$p2.$p3.$p4;}echo $key;}
                    #senha(4);
                ?>
                <label id="msg">Mensagem</label>
                <input type="text" id="code">
            </div><hr>
        </div>
        <div class="bottomBar">
            <button class="botao blue" id="cancelar">Cancelar</button>
            <button class="botao orange" id="resgatar">Resgatar</button>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>