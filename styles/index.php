<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include("component/menu.html");
        include("component/button.html");
        include("component/input.html");
    ?>
    <style>
        body{
            display: flex;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
        }
    </style>
    <script>
        var topMenu = document.getElementById("topMenu");
        var divOverlay = topMenu.parentNode.parentNode;
        var isDown = false;
        topMenu.addEventListener('mousedown', function(e) {
            isDown = true;
        }, true);

        document.addEventListener('mouseup', function() {
        isDown = false;
        }, true);

        document.addEventListener('mousemove', function(event) {
        event.preventDefault();
        if (isDown) {
        var deltaX = event.movementX;
        var deltaY = event.movementY;
        var rect = divOverlay.getBoundingClientRect();
        divOverlay.style.left = rect.x + deltaX + 'px';
        divOverlay.style.top  = rect.y + deltaY + 'px';
        }
        }, true);
    </script>
</body>
</html>