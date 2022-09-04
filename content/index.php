<form action="" method="post">
    <input value="" name="tiles" id="tiles">
</form>
<a id="as"></a>
<div id="grid"></div>
<script>
    function generateSpace(gridSize){
    grid = document.getElementById("grid")
    tileSize = 50
    cell = []
    for(x=0;x<=gridSize;x++){
        for(y=0;y<=gridSize;y++){
            let tile = document.createElement("div")
            tile.style.backgroundImage="url(/content/spaces/base/floor/grass.jpg)"
            tile.id="tile"
            tile.style.position="absolute"
            tile.style.width=tileSize+1+"px"
            tile.style.height=tileSize+1+"px"
            tile.style.left=x*tileSize+"px"
            tile.style.top=y*tileSize+"px"
            grid.appendChild(tile)
            cell.push(tile)        
        }
    }
    document.getElementById("as").innerHTML = cell[]
    console.log(cell)
}
generateSpace(10)
</script>
<?php 
    echo $_POST['tiles'];
?>