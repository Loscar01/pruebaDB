<?php
include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST['dniRegister']) >= 1 && 
        strlen($_POST['contrasenaRegister']) >= 1 &&
        strlen($_POST['dobleContrasenaRegister']) >= 1
    ) {
        $dni = trim($_POST['dniRegister']);
        $password = trim($_POST['contrasenaRegister']);
        $doblePassword = trim($_POST['dobleContrasenaRegister']);
        $fecha = date("Y-m-d"); // Cambiado el formato de la fecha para que sea compatible con MySQL
        
        $consulta = "INSERT INTO datos(dni, contrasenia, dobleContrasenia, fecha)
                     VALUES ('$dni', '$password', '$doblePassword', '$fecha')";

        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            <h3 class="success">Tu registro se ha completado </h3>
<?php
        } else {
?>
            <h3 class="error">Error en tu registro </h3>
<?php
        }
    }
}
?>
