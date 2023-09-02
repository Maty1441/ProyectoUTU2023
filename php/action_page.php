<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando</title>
</head>
<body>
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

if (empty($nombre) || empty($apellido) || empty($edad) || empty($cedula) || empty($departamento)) {
    echo '<style>';
    echo 'body { 
        margin: 0;
        padding: 0;
        min-height: 100vh;
        width: 100%;
        background: linear-gradient(rgba(0, 0, 0, .8), rgba(0,0,0, .8)), url("../images/imagenFormulario.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;}';
    echo '</style>';
    
    echo '<div style="
        color: #DDDDDD;
        text-shadow: 1px 70px 1px 1px white;
        font-size: 7vh; padding: 10px; 
        text-align: center; 
        position: absolute; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        font-family: sans-serif;">';
    echo 'Hay campos vacios.';
    echo '</div>';
} else {
    // Consulta SQL para insertar los datos en la tabla existente
    $insertar_datos = "INSERT INTO participantes (Nombre, Apellido, Edad, Cedula, Departamento) VALUES ('$nombre', '$apellido', '$edad', '$cedula', '$departamento')";

    if ($conexion->query($insertar_datos) === TRUE) {
        echo '<style>';
        echo 'body { 
        margin: 0;
        padding: 0;
        min-height: 100vh;
        width: 100%;
        background: linear-gradient(rgba(0, 0, 0, .8), rgba(0,0,0, .8)), url("../images/imagenFormulario.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;}';
    echo '</style>';
    echo '<div style="
        color: #DDDDDD;
        text-shadow: 1px 70px 1px 1px white;
        font-size: 7vh; padding: 10px; 
        text-align: center; 
        position: absolute; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        font-family: sans-serif;">';
    echo "Los datos se han insertado correctamente en la tabla.<br>";
    echo '</div>';

    } else {
        echo "Error al insertar datos: " . $conexion->error . "<br>";
    }
}
    
header("refresh:2;url=../formulario/formulario.html");
$conexion->close();
?>
</body>
</html>
