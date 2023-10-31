<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/listaParticipantes.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
<div class="arriba">
<h1><span>O.</span><span class="colorLetraK">K</span><span>.C.</span></h1>
<h2>Official <span class="colorLetraK">Karate </span> Championship</h2>
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
			      <th>Agregar</th>
			      <th>Modificar</th>
			      <th>Eliminar</th>
	      	</tr>
	      </thead>
                  
            <tbody>
            <?php foreach($data["competidores"] as $dato) {
                      echo "<tr>";
                      echo "<td>".$dato["Nombre"] . "</td>";
                      echo "<td>".$dato["Apellido"] . "</td>";
                      echo "<td>".$dato["fecha_nacimiento"] . "</td>";
                      echo "<td>".$dato["ci"] . "</td>";
                      echo "<td>".$dato["departemento"] . "</td>";
                      echo "<td>".$dato["genero"] . "</td>";
                      echo "<td><a href='index.php?c=vehiculos&a=nuevo&id=" . $dato["idCompetidores"] . "'>Agregar</a></td>";
                      echo "<td><a href='index.php?c=vehiculos&a=modificar&id=" . $dato["idCompetidores"] . "'>Modificar</a></td>";
                      echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=" . $dato["idCompetidores"] . "'>Eliminar</a></td>";
                      echo "</tr>";
                  }
            ?>
            </tbody>
      </table>
</body>
</html>     