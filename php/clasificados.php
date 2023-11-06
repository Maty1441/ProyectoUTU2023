<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../vistas/assets/css/clasificados.css">
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
$conexion = new mysqli("127.0.0.1", "root", "", "torneo_bd", 33065); //cambiar el puerto 33065 a 3306

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$consulta = "SELECT competidores.nombre, puntaje.puntajeRonda, RANK() OVER (ORDER BY puntaje.puntajeRonda DESC) AS posicion
FROM competidores
INNER JOIN clasificados ON competidores.idcompetidores = clasificados.idcompetidores
INNER JOIN puntaje ON clasificados.idClasificados = puntaje.idClasificados
ORDER BY puntaje.puntajeRonda DESC;";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
  echo "<table border='0'>
          <tr class='primeraFila'>
            <th>Posición</th>
            <th class='nombre'>Nombre</th>
            <th>Puntaje</th>
          </tr>";
  $contador = 1;
  while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>" . $contador . "</td>
            <td class='nombre'>" . $fila["nombre"] . "</td>
            <td>" . $fila["puntajeRonda"] . "</td>
          </tr>";
    $contador++;
  }
  echo "</table>";
} else {
  echo "No se encontraron puntajes.";
}
$conexion->close();
?>
</body>
</html>