<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form method="post">
        <h1>Registro</h1>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="email">
        <input type="submit" name="register">
    </form>
    <?php
        include('registrar.php')
    ?>
</body>
</html>