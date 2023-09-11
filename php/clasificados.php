<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/clasificados.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificados</title>
</head>
<body>
    <h1>CLASIFICADOS</h1>
    <div class="barra">
        <h2 class="txt1">POSICIÓN</h2>
        <h2 class="txt2">COMPETIDOR</h2>
        <h2 class="txt3">PUNTAJE DE LOS JUECES</h2>
    </div>
<?php
$conexion = new mysqli("127.0.0.1", "root", "", "basedepruebas2", 33065);

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$consulta = "SELECT posicion, CONCAT(Nombre, ' ', Apellido) AS NombreCompleto, puntaje FROM clasificados"; //CONTAC es una funcion que conecta valores
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
  echo "<table border='0'>
          <tr>
            <th>posicion</th>
            <th>competidor</th>
            <th>puntaje</th>
          </tr>";

  while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>" . $fila["posicion"] . "</td>
            <td>" . $fila["competidor"] . "</td>
            <td>" . $fila["puntaje"] . "</td>
          </tr>";
}
  echo "</table>";
} else {
  echo "No se encontraron registros.";
}
$conexion->close();
?>
</body>
</html>