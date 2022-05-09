const expresiones={
    nombre:/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/,
    email:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
    numeros: /^[0-9]*$/
}
const formulario=document.getElementById('form');
const nombre=document.getElementById('nom');
const correo=document.getElementById('correo');
const direccion=document.getElementById('direc');
const telefono=document.getElementById('num');
const comentario=document.getElementById('comen');



formulario.addEventListener('submit', e=>{
    e.preventDefault();
    /* Validacion Nombre */
    if(expresiones.nombre.test(nombre.value)==false){
        alert("Nombre incorrecto");
        nombre.focus();
    }
    if(nombre.length<2){
        alert("El Nombre es muy corto");
        nombre.focus();
    }
    if(nombre.length>30){
        alert("El Nombre es muuuy largo");
        nombre.focus();
    }
    /*validacion correo*/
    if(expresiones.email.test(correo.value)==false){
        alert("el email colocado es incorrecto");
        correo.focus();
    }
    /*validacion numero de telefono*/
    if(expresiones.numeros.test(telefono.value)==false){
        alert("tu telefono es incorrecto");
        telefono.focus();
    }
    if(telefono.length<5){
        alert("tu numero de telefono es demasiado corto")
        telefono.focus();
    }
    if(telefono.length>15){
        alert("tu numero de telefono es demasiado largo")
        telefono.focus();
    }
    /*validacion comentarios*/
    if(expresiones.nombre.test(comentario.value)==false){
        alert("por favor no añadas caracteres especiales a los comentarios");
        comentario.focus();
    }
})