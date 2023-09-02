<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Formulario</title>
</head>
<body>
    <h1>Procesando Formulario</h1>
<?php
$servername = "localhost";
$username = "usuario1";
$password = "1234";
$database = "basedepruebas2";
$port = 33065;

$conexion = new mysqli($servername, $username, $password, $database, $port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Datos del formulario
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$edad = $_POST["Edad"];
$cedula = $_POST["Cedula"];
$departamento = $_POST["Departamento"];

// Consulta SQL para insertar los datos en la tabla existente
$insertar_datos = "INSERT INTO participantes (Nombre, Apellido, Edad, Cedula, Departamento) VALUES ('$nombre', '$apellido', '$edad', '$cedula', '$departamento')";

if ($conexion->query($insertar_datos) === TRUE) {
    echo "Los datos se han insertado correctamente en la tabla.<br>";
} else {
    echo "Error al insertar datos: " . $conexion->error . "<br>";
}
$conexion->close();
?>
</body>
</html>
