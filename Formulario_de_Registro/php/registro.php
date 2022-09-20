<?php
    include("conexionDataBase.php");
    if(isset($_POST["register"])){
        if( strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['apellidoPaterno']) >= 1 &&
            strlen($_POST['apellidoMaterno']) >= 1 &&
            strlen($_POST['contrasena']) >= 1){
        }
        $nombre = $_POST['nombre'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $contrasena = $_POST['contrasena'];
        $consulta = "INSERT INTO afectado(nombrea, appa, apma) VALUES ('$name','$apellidoPaterno','$apellidoMaterno'";
        $resultado = mysql_query($conex,$consulta);
        if($resultado){
            echo"logeado";
        }
        else{
            echo"error";
        }
    }
    
?>