<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/estilos.css">   
    <!-- Normalize --> 
    <link rel="stylesheet" href="../Formulario-de-Login/css/normalize.css">
</head>
<body>
    <div id="particles-js"></div>
    <br>
    <!-- ID Particles.js -->
    <form id="form" class="form-login" method="POST" action="conexionDataBase.php">
        <h5>Formulario Login</h5>
        <input id="usuario" class="controls" type="text" name="usuario" value="" placeholder="Usuario">
        <input id="contraseña" class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
        <input id="btn-inicio" class="buttons" type="submit" name="" value="Ingresar">
        <p><a href="#">¿Olvidastes tu Contraseña?</a></p>
    </form>
    <!-- JS Particles.js -->
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    <!-- JS FontAwesome -->
    <script src="https://kit.fontawesome.com/a2e8d0339c.js"></script>
    <script src="js/validacion.js"></script>
</body>
</html>