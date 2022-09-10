<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Questionario</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/normalize.css"> 
    <script>
        function validarRadio(){
            var s="no";
        for(var i=0;i<document.f1.va.length;i++)
        {
            if(document.f1.va[i].checked){
                alert("marcó: "+document.f1.va[i].value);
                s="si";
            }
        }
        if(s=="no"){
            alert("Debe seleccionar una respuesta");
        }
        validarRadio2();
        }
        function validarRadio2(){
            var s="no";
        for(var i=0;i<document.f1.va2.length;i++)
        {
            if(document.f1.va2[i].checked){
                alert("marco:"+document.f1.va2[i].value);
                s="si";
            }
        }
        if(s=="no"){
            alert("Debe seleccionar una respuesta");
        }
        }
    </script>
</head>
<body id="sander" onkeydown="bodytecla()" onkeyup="bodytecla2()">
    <!-- Cabezera -->

    <header>
        <img class="logo" src="imagenes/logo.jpeg" alt="">
        <div class="navbar">
            <li class="link-1" id="joseph2">Contactanos</li>
            <li class="link-2" >Nosotros</li>
            <li class="link-3"  id="joseph">GitHub</li>
        </div>  
    </header>

    <!-- formulario -->

    <form id="form" action="" onsubmit="return validad()">
        <div  class="camposForm">
            <p class="label" for="">Nombre</p>
            <input id="nom" type="text" placeholder="Nombre" required>
        </div>
        <div  class="camposForm">
            <p class="label" for="">Correo electronico</p>
            <input id="correo" type="email" placeholder="Correo electronico" required>
        </div>
        <div  class="camposForm">
            <p class="label" for="">Direccion</p>
            <input id="direc" type="text" placeholder="Direccion" required>
        </div>
        <div  class="camposForm">
            <p class="label" for="">Numero de telefono</p>
            <input id="num" type="text" placeholder="Número" required>
        </div>
        <div class="camposForm">
            <p class="label" for="">comentarios</p>
            <input id="comen" type="text" placeholder="Comentarios" required>
        </div>
    <form name="f1">
        <div class="camposForm">
            <p class="label">Alguna ves sufrio algun tipo de violencia?</p>
            <p class="especial"  for="">Si</p><input id="si" name= "va"class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no" name= "va" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Ha sido víctima de abuso físico?</p>
            <p class="especial"  for="">Si</p><input id="si1" name= "va2" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no1" name= "va2" class="radioNo" type="radio">
        </div>
        <!---->
        <div class="camposForm">
            <p class="label">Ha sido víctima de abuso psicológico?</p>
            <p class="especial"  for="">Si</p><input id="si2" name= "va3" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no2" name= "va3" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Ha enfrentado una situación de violencia desagradable?</p>
            <p class="especial"  for="">Si</p><input id="si3" name= "va4" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no3" name= "va4" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Ha sido víctima de violencia sexual?</p>
            <p class="especial"  for="">Si</p><input id="si4" name= "va5" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no4" name= "va5" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Cree que necesite ayude?</p>
            <p class="especial"  for="">Si</p><input id="si5" name= "va6" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no5" name= "va6" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Esta listo para iniciar un tratamiento con algún especialista?</p>
            <p class="especial"  for="">Si</p><input id="si6" name= "va7" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no6" name= "va7" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Has hablado con algún familiar acerca del tema?</p>
            <p class="especial"  for="">Si</p><input id="si7" name= "va8" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no7" name= "va8" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label">Sabes a donde acudir o a quien?</p>
            <p class="especial"  for="">Si</p><input id="si8" name= "va9" class="radioSi" type="radio"><br>
            <p class="especial" for="">No</p><input id="no8" name= "va9" class="radioNo" type="radio">
        </div>
        <div class="camposForm">
            <p class="label" for="">Déjenos su opinión sobre la violencia en general, si lo desea</p>
            <input id="comen2" type="text" placeholder="Comentarios" required>
        </div>
        <div class="contenedor-btn">
            <input id="btnListo" class="boton-enviar-eliminar" type="submit" value="enviar" class="btn-com" onclick="validarRadio()">
            <input class="boton-enviar-eliminar" type="reset" value="borrar">
        </div>
    </form>
    <script src="js/app.js"></script>
</body>
</html>