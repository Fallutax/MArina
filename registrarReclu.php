<?php
include("con_db.php");

// //Probar la conexión
// if ($conex) {     echo "Conectado a la base de datos";
//     // echo "Conectado a la base de datos";
// } else {
//     echo "Error de conexión: " . mysqli_connect_error();
// }

// include("con_db.php");
// // //Probar la conexión



if (isset($_POST['register'])) {
    if (strlen($_POST['nombres']) >= 1 && 
    strlen($_POST['apellidos']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['cedula']) >= 1 && 
    strlen($_POST['telefono']) >= 1 &&
    strlen($_POST['fecha_de_nacimiento']) >= 1 && 
    strlen($_POST['sexo']) >= 1 &&
    strlen($_POST['estado_civil']) >= 1 && 
    strlen($_POST['peso']) >= 1 &&
    strlen($_POST['altura']) >= 1 && 
    strlen($_POST['estudios']) >= 1) {
        $nombres = trim($_POST['nombres']);
        $apellidos = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']);
        $fecha_de_nacimiento = trim($_POST['fecha_de_nacimiento']);
        $sexo = isset($_POST['sexo']) ? trim($_POST['sexo']) : '';
        $estado_civil = trim($_POST['estado_civil']) ? trim($_POST['estado_civil']): '';
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);
        $estudios = trim($_POST['estudios']) ? trim($_POST['estudios']) : '';
        $fecha_reg = date("d/m/y") ;
        $consulta = "INSERT INTO datos( nombres, apellidos, cedula, correo, telefono, fecha_de_nacimiento, sexo, estado_civil, peso, altura, estudios, fecha_reg) VALUES ('$nombres','$apellidos','$cedula','$correo','$telefono','$fecha_de_nacimiento','$sexo','$estado_civil','$peso','$altura','$estudios','$fecha_reg')";

        $resultado = mysqli_query($conex, $consulta);

       
        if ($sexo) {
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Inscripción correcta",
                    text: "Te has inscrito correctamente",
                    confirmButtonText: "Aceptar"
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>
            <?php
        } else {
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error al inscribirte",
                    text: "Inténtalo nuevamente",
                    confirmButtonText: "Aceptar"
                });
            </script>
            <?php
        }
        } else {
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: "warning",
                    title: "Campos incompletos",
                    text: "Por favor, complete todos los campos antes de continuar",
                    confirmButtonText: "Aceptar"
                });
            </script>
            <?php
        }
        }
        


?>