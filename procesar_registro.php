<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "registro-reclutamiento";

// Conectar a la base de datos
$conex = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conex->connect_error) {
    die("Connection failed: " . $conex->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['firstName'] . ' ' . $_POST['lastName'];
$email = $_POST['registerEmail'];
$password = $_POST['registerPassword']; // Encriptar la contraseña
$fecha_registro = date('Y-m-d H:i:s');

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, email, password, fecha_registro) VALUES (?, ?, ?, ?)";
$stmt = $conex->prepare($sql);
$stmt->bind_param("ssss", $nombre, $email, $password, $fecha_registro);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conex->error;
}

// Cerrar conexión
$stmt->close();
$conex->close();