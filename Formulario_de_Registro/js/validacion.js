const expresiones={
    nombre:/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/,
    email:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
    numeros:/^[0-9]*$/,
    contrasena: /^.{4,12}$/,
}

const btnInicio = document.getElementById('btn-inicio')
const btnRegistro = document.getElementById('btn-registro');
const formulario = document.getElementById('form');
const usuario = document.getElementById('nombre');
const contrasena = document.getElementById('contrasena');
const apellidoPaterno = document.getElementById('apellidoPaterno');
const apellidoMaterno = document.getElementById('apellidoMaterno');
let validacionCompleta=7;


btnInicio.addEventListener('click', ()=>{
    window.location.assign('http://localhost/SDE/formularios_con_php/Formulario-de-Login/index.php');
})

formulario.addEventListener('submit', ()=> {
    /* Validacion de ususario */
    if(expresiones.nombre.test(usuario.value)==false){
        alert('Usuario no valido');
        usuario.focus();
        validacionCompleta=validacionCompleta-1;
    }
    if(usuario.length<2){
        alert('Nombre de usuario muy corto');
        usuario.focus();
        validacionCompleta=validacionCompleta-1;
    }
    if(usuario.length>15){
        alert('Nombre de usuario muy largo');
        usuario.focus();
        validacionCompleta=validacionCompleta-1;
    }
    /*Validacion Apellido Paterno */
    if(expresiones.nombre.test(apellidoPaterno.value)==false){
        alert('Usuario no valido');
        apellidoPaterno.focus();
        validacionCompleta=validacionCompleta-1;
    }
    if(apellidoPaterno.length<2){
        alert('Nombre de usuario muy corto');
        apellidoPaterno.focus();
        validacionCompleta=validacionCompleta-1;
    }
    if(apellidoPaterno.length>15){
        alert('Nombre de usuario muy largo');
        apellidoPaterno.focus();
        validacionCompleta=validacionCompleta-1;
    }
    /* Validacion Apellido Materno*/
    if(expresiones.nombre.test(apellidoMaterno.value)==false){
        alert('Usuario no valido');
        apellidoMaterno.focus();
        validacionCompleta=validacionCompleta-1;
    }
    if(apellidoMaterno.length<2){
        alert('Nombre de usuario muy corto');
        apellidoMaterno.focus();
        validacionCompleta=validacionCompleta-1;
    }
    if(apellidoMaterno.length>15){
        alert('Nombre de usuario muy largo');
        apellidoMaterno.focus();
        validacionCompleta=validacionCompleta-1;
    }
    /*Validacion contrasena*/

    if(expresiones.contrasena.test(contrasena.value)==false){
        alert('contraseña incorrecta')
    }

    btnRegistro.addEventListener('click', ()=>{
        window.location.assign('E:/Formularios-main-main/Formulario-de-Login/index.html');
    })
})

