let pen
let objc
colors = []
//Puxa os pisos(tintas) do banco de dados
for(let co=1;co<="<?php echo mysqli_num_rows($spaces_textures); ?>";co++){
    let color = document.getElementById("color"+co)
    colors.push(color.style.backgroundImage)
    color.addEventListener("click",()=>{
        pen = color.style.backgroundImage
    })
}
for (let ob = 0; ob <= 5; ob++) {
    
    let objs = document.getElementById("objs"+ob)
    objs.addEventListener("click",()=>{
        objc = objs.style.backgroundImage
    })
    
}
minimap = document.getElementById("minimap")
obj = document.getElementById("obj")
grid = document.getElementById("grid")
gridSize = "<?php echo $space_size ?>" /* Puxa o tamanho da grid do banco de dados */
tileSize = 50
cell = []

/* Gera a grid */
for(x=-gridSize;x<=gridSize;x++){
    for(y=-gridSize;y<=gridSize;y++){
        //Cria os pisos
        let tile = document.createElement("div")
        let mi = document.createElement("div")

        //Gera tons de grama aleatório
        let p = Math.floor(Math.random() * 3);
        tile.style.backgroundImage=colors[p]
        mi.style.backgroundImage=colors[p]

        /* Click do mouse no quadradinho */
        var isDown = false;
        document.addEventListener('mousedown',()=>{isDown = true;});document.addEventListener('mouseup',()=>{isDown = false;});
        tile.addEventListener("mousedown",()=>{
            tile.style.backgroundImage=pen 
            mi.style.backgroundImage=pen
        })
        tile.addEventListener('mouseover',(event)=>{event.preventDefault();
            if(isDown){
                tile.style.backgroundImage=pen
                mi.style.backgroundImage=pen

            }
        });
        /* Click do mouse no minimapa */
        mi.addEventListener("mousedown",()=>{
            tile.style.backgroundImage=pen
            mi.style.backgroundImage=pen
            if(objc!=null && mi.name=="tile"){
                mi.name="otile"
                let elem = document.createElement("div")
                let el = document.createElement("div")
                elem.id="elem"
                elem.style.backgroundImage=objc
                el.id="el"
                el.style.width=((tileSize/gridSize)/2)+"px"
                el.style.height=((tileSize/gridSize)/2)+"px"
                tile.appendChild(elem)
                mi.appendChild(el)
                el.addEventListener("click",()=>{el.remove(); elem.remove(); mi.name="tile"})
                elem.addEventListener("click",()=>{mi.name="tile"})
            }
        })
        mi.addEventListener('mouseover',(event)=>{event.preventDefault();
            if(isDown){
                tile.style.backgroundImage=pen
                mi.style.backgroundImage=pen
                if(objc!=null && mi.name=="tile"){
                    mi.name="otile"
                    let elem = document.createElement("div")
                    let el = document.createElement("div")
                    elem.id="elem"
                    elem.style.backgroundImage=objc
                    el.id="el"
                    el.style.width=((tileSize/gridSize)/2)+"px"
                    el.style.height=((tileSize/gridSize)/2)+"px"
                    tile.appendChild(elem)
                    mi.appendChild(el)
                    el.addEventListener("click",()=>{el.remove(); elem.remove(); mi.name="tile"})
                    elem.addEventListener("click",()=>{mi.name="tile"})
                }
            }
        });
        tile.id="tile"
        tile.style.position="absolute"
        tile.style.width=tileSize+1+"px"
        tile.style.height=tileSize+1+"px"
        tile.style.left=x*tileSize+"px"
        tile.style.top=y*tileSize+"px"
        tile.style.zIndex=(-x+y)+(-x+y)
        grid.appendChild(tile)
        cell.push(tile)
        mi.id="tile"
        mi.name="tile"
        mi.style.position="absolute"
        mi.style.width=(tileSize/gridSize)+"px"
        mi.style.height=(tileSize/gridSize)+"px"
        mi.style.left=x*(tileSize/gridSize)+tileSize+"px"
        mi.style.top=y*(tileSize/gridSize)+tileSize+"px"
        minimap.appendChild(mi)

    }
}