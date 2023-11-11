<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/listas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
<div class="logo">
<img src="assets/images/logo.svg" width="220px" height="220px" class="logo">
<div class='busc'>
  <form method="GET" action="resultado_buscador.php" class="resutlado_buscador">
    <input type="text" name="consulta" placeholder="Buscador" class="buscador">
    <button type="submit" class="lupa">&#8981;</button>
  </form>
</div>
</div>
  <table border="1" width="80%" class="table">
	  <thead>
	  	<tr>
        <th>Nombre</th>
	      <th>Apellido</th>
	      <th>Fecha de Nacimiento</th>
	      <th>Cedula</th>
	      <th>Departamento</th>
	      <th>Genero</th>
	      <th>Modificar</th>
	      <th>Eliminar</th>
	  	</tr>
	  </thead>
              
    <tbody>
    <?php foreach($data["Competidor"] as $dato) {
          echo "<tr>";
          echo "<td>".$dato["nombre"] . "</td>";
          echo "<td>".$dato["apellido"] . "</td>";
          echo "<td>".$dato["fechaNac"] . "</td>";
          echo "<td>".$dato["ci"] . "</td>";
          echo "<td>".$dato["departamento"] . "</td>";
          echo "<td>".$dato["genero"] . "</td>";
          echo "<td><a href='index.php?c=listas&a=modificar&id=" . $dato["idCompetidores"] . "'>Modificar</a></td>";
          echo "<td><a href='index.php?c=listas&a=eliminarClasificados&id=" . $dato["idCompetidores"] . "'>Eliminar</a></td>";
          echo "</tr>";
      }
    ?>
    </tbody>
  </table>
</body>
</html>