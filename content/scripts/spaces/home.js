let pen
colors = []
for(let co=1;co<=6;co++){
    let color = document.getElementById("color"+co)
    colors.push(color.style.backgroundImage)
    color.addEventListener("click",()=>{
        pen = color.style.backgroundImage
    })
}

function generateSpace(gridSize){
    grid = document.getElementById("grid")
    tileSize = 50
    cell = []
    for(x=0;x<=gridSize;x++){
        for(y=0;y<=gridSize;y++){
            let tile = document.createElement("div")
            tile.style.backgroundImage=colors[5]
            tile.id="tile"
            tile.style.position="absolute"
            tile.style.width=tileSize+1+"px"
            tile.style.height=tileSize+1+"px"
            tile.style.left=x*tileSize+"px"
            tile.style.top=y*tileSize+"px"
            cell.push(tile)
        }
    }
    console.log(cell)
}
generateSpace(10)

function loadSpace(){
    for(i=0;i<cell.length;i++){
        grid.appendChild(cell[i])
    }
}
loadSpace()
