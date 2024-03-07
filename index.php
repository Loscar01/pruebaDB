<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="menu-horizontal">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#acerca-de">Acerca de</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#contacto">Contacto</a></li>
    </ul>
<h1><Center>Universidad de la cuenca del plata</Center></h1>
<h1><center>Por favor, identifíquese</center></h1>

<form method="post" autocomplete="off">
    <div class="input-group">
        <div class="input-container">
            <label for="dniRegister">D.N.I</label>
            <input type="number" id="dniRegister" name="dniRegister" name="dniRegister" placeholder="Introduce tu DNI aquí">
        </div>
        <div class="input-container">
            <label for="contrasenaRegister">Contraseña</label>
            <input type="password" id="contrasenaRegister" name="contrasenaRegister" placeholder="Introduce tu Contraseña">
        </div>
        <div class="input-container">
            <label for="dobleContrasenaRegister">Repite la Contraseña</label>
            <input type="password" id="dobleContrasenaRegister" name="dobleContrasenaRegister" placeholder="Introduce tu Contraseña">
        </div>
        <button type="submit" name="send" class="btn">Enviar</button>
    </div>
</form>
<script src="index.js"></script>    
<?php
    include("send.php")
?>
</body>
</html>
