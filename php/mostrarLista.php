<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../vista/assets/css/mostrarLista.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
<div class="arriba">
<h1><span>O.</span><span class="colorLetraK">K</span><span>.C.</span></h1>
<h2>Official <span class="colorLetraK"> Karate </span> Championship</h2>
<div class='busc'>
  <form method="GET" action="resultado_busqueda.php" class="search-form">
    <input type="text" name="consulta" placeholder="Buscador" class="buscador">
    <button type="submit" class="lupa">&#8981;</button>
  </form>
</div>
</div>
<div class='botones'>
      <a href='#'>Confirmar</a>  
      <a href='#'>Modificar</a>
      <a href='#'>Agregar</a>
      <a href='#'>Eliminar</a>
</div>
<?php
$conexion = new mysqli("127.0.0.1", "root", "", "torneo_bd", 33065);

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$consulta = "SELECT CONCAT(Nombre, ' ', Apellido) AS NombreCompleto, fecha_nacimiento, ci, Departamento FROM competidores"; //CONTAC es una funcion que conecta valores
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
  echo "<table border='0'>
          <tr class='primera-fila'>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Cedula</th>
            <th>Departamento</th>
          </tr>";

  while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>" . $fila["NombreCompleto"] . "</td>
            <td>" . $fila["fecha_nacimiento"] . "</td>
            <td>" . $fila["ci"] . "</td>
            <td>" . $fila["Departamento"] . "</td>
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