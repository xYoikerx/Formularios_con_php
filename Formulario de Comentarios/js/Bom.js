const boton = document.getElementById('bom');
let Video;

function video(){
    Video=window.open("https://youtu.be/BW_2v_QwXyg","width=800","height=600","scrollback=false")
}

boton.addEventListener('click',()=>{
    video();
})