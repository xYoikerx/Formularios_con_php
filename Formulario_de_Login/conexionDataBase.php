<?php
    session_start();
    $usuario =$_POST['usuario'];
    $clave = $_POST['contrasena'];
    $conexion = mysqli_connect("localhost","root","","sde"); // por medio de esrta liunea de codigo nos conectamos a maysql
    
    if(!$conexion){
        echo "Error en la conexión a MYSQL:". mysqli_error();
        die();
    }
    
    $sql = " SELECT * FROM usuario WHERE nombreu='$usuario' AND password='$clave';"; //eleccona todos los datos de los usuarios donde el nombre de el usuario es el del usuario igual que estamos iongresando
    $resultado = mysqli_query($conexion,$sql); //$Resultado almacena todos los regitros que cumple la consulta
    
    if(!empty($resultado)&& mysqli_num_rows($resultado)>0){ // si cumple hay almenos un usuario encontrado () 
        $fila= mysqli_fetch_assoc($resultado); //recuperaos el registro completo que cumple la consulta              
        if(is_null($fila['especialista']) && is_null($fila['voluntario'])){ //el usuario logueado es afectado
            $_idafectado =$fila['afectado_idafectado'];
            $sql = "SELECT * FROM afectado WHERE idafectado='$_idafectado'";
            $resultadoAfectadoSQL = mysqli_query($conexion, $sql);
            $filaAfectado = mysqli_fetch_assoc($resultadoAfectadoSQL);
            $_SESSION['user_tipo']= 'Usuario Afectado';
            $_SESSION['idAfectado']= $filaAfectado['idafectado'];
            $_SESSION['User_nombre'] = $filaAfectado['nombrea'].' '.$dilaAfectado['appa'].' '.$filaAfectado['apma'];
            header('Location:http://localhost/SDE/Formularios/maquetacion_sander/index.php');  // redireccionar a la pagina `principal de afectado
        }
    }
    else{
        echo "Usuario no encontrado!!";
        header('Location:http://localhost/SDE/Formularios/Formulario_de_Login/index.php');
    }

