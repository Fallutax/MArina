<?php

include("conexion.php");

if (!empty($_POST["btningresar"])) {
    // Verificar si los campos están vacíos
    if (empty($_POST["emailUsuario"]) || empty($_POST["passwordUsuario"])) {
        echo '<div class="alert alert-danger">Los datos son vacíos</div>';
    } else {
        // Sanitizar y preparar los datos
        $usuario = $conexion->real_escape_string($_POST["emailUsuario"]);
        $clave = $_POST["passwordUsuario"];

        // Consulta segura para verificar la existencia del usuario
        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sql->bind_param("s", $usuario);
        $sql->execute();
        $resultado = $sql->get_result();

        if ($datos = $resultado->fetch_object()) {
            // Verificar la contraseña
            if (password_verify($clave, $datos->password)) {
                // Redirigir al index si las credenciales son válidas
                header("location:index.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">La contraseña es incorrecta</div>';
            }
        } else {
            echo '<div class="alert alert-danger">El usuario no existe</div>';
        }
    }
}
?>


