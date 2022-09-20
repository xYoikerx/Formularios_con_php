<?php
$conexion = mysqli_connect("localhost","root","","sde");
if(!$conexion){
    echo "Error BD: ".mysqli_error();
    die();
}

$nombreAfectado = $_POST ['nombre'];
$apellidoPaterno = $_POST ['ApellidoPaterno'];
$apellidoMaterno = $_POST ['ApellidoMaterno'];
$Centro = $_POST ['idcentro'];
$Edad = $_POST ['edad'];
$FechaNac= $_POST ['fnac'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];




$nombreAfectado= "santi";
$apellidoPaterno= "giraldo";
$apellidoMaterno= "romero";
$Centro=1;
$Edad= 13;
$FechaNac= "1990-08-06";
$usuario="Santiago";
$clave="12334";


//validar nom usuario
$sql = "SELECT * FROM usuario WHERE nombreu = $usuario;";
$resultado = mysqli_query($conexion, $sql);

if(!empty($resultado) &&  mysqli_num_rows($resultado)>0){
    echo"El usuario ya existe";
}else{
    $sql = "INSERT INTO afectado VALUES (0, '$nombreAfectado', '$apellidoPaterno','$apellidoMaterno','$Centro','$Edad','$FechaNac')"
    $resultado = mysqli_query($conexion, $sql);
if(!empty($resultado) && mysqli_num_rows($resultado)>0){
        $fila = mysqli_fetch_assoc($resultado);
        $idAfectado = $fila['idafectado'];
        $sql = "INSERT INTO usuario VALUES(0,'$usuario', '$clave' , '$idAfectado' , null, null)";
        headeer('Location: ./SDE/maquetacion_Juan_Plablo/index.php'); //redireccionar
}
echo"Afectado Creado Exitosamente"
}
mysqli_close($conexion);

?>