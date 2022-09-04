let codes = [
    "oi",
    "zap",
    "peito",
]

msg = document.getElementById("msg"); msg.style.color = "transparent"
document.getElementById("resgatar").addEventListener("click",()=>{
    let code = document.getElementById("code")
    for(i=0;i<codes.length;i++){
        if(code.value==codes[i]){
            console.log(codes[i])
            msg.innerHTML = "Código Resgatado com Sucesso!"; msg.style.color = "lime"
        }else{
            msg.innerHTML = "Insira um Código Válido."; msg.style.color = "red"
        }
    }
    code.value=""
})
document.getElementById("cancelar").addEventListener("click",()=>{
    msg.style.color = "transparent"; code.value=""
})