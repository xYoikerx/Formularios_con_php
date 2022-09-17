<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Registro</title>
</head>
<body>
    <div id="particles-js"></div>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Systems Development Enterprise</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button id="btn-inicio" class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form id="form" class="formulario" method="POST" action="registroAfectado.php">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input name="nombre" id="nombre" type="text" placeholder="Nombre" required>
            <input name="apellidoPaterno" id="apellidoPaterno" type="text"placeholder="Apellido Paterno" required>
            <input name="apellidoMateno" id="apellidoMaterno" type="text" placeholder="Apellido Materno" required>
            <input name="fechaNacimiento" id="nombre" type="date" placeholder="Fecha Nacimiento" required>
            <input name="contrasena "id="contraseña" type="password" placeholder="Contraseña" required>
            
            <input name="register" id="btn-registro" type="submit" value="Registrarse" class="btn-registro">
        </form>
    </div>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/validacion.js"></script>
    <!-- JS FontAwesome -->
    <script src="https://kit.fontawesome.com/a2e8d0339c.js"></script>
</body>

</html>