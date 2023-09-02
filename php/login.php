<?php
$servername = "localhost";
$username = "usuario1";
$password = "1234";
$dbname = "basedepruebas2";
$port = 33065;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

$nombre_usuario = $_POST["contraseña"]; // Asegúrate de que estás usando el campo correcto del formulario

// Consulta SQL para buscar un registro con el nombre de usuario proporcionado
$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: ../admin1/admin1.html");

} else {
    echo '<style>';
    echo 'body { background: linear-gradient(rgba(0, 0, 0, .8), rgba(0,0,0, .8)), url("../images/fondoLogin.jpg"); background-size: cover; background-position: center; background-repeat: no-repeat;}';
    echo '</style>';
    
    echo '<div style="color: #DDDDDD; text-shadow: 1px 70px 1px 1px white; font-size: 7vh; padding: 10px; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-family: sans-serif;">';
    echo 'Nombre de usuario incorrecto.';
    echo '</div>';
    
    
    header("refresh:2;url=../login/login.html");
}

$conn->close();
?>