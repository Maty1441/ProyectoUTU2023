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
    <form action="index.php?c=torneo&a=buscar" target="_blank" method="post" class="resutlado_buscador">
    <input type="text" name="consulta" placeholder="Buscador" class="buscador">
    <button type="submit" class="lupa">&#8981;</button>
  </form>
</div>
</div>
    <table border="1" width="80%" class="table">
	    <thead>
	    	<tr>
		      <th>Nombre</th>
		      <th>Fecha de Inicio</th>
		      <th>Fecha de Finalización</th>
		      <th>Lugar</th>
          <th>Estado</th>
	    	</tr>
	    </thead>
                
      <tbody>
      <?php foreach($data["Torneo"] as $dato) {
          echo "<tr>";
          echo "<td>".$dato["nombre"] . "</td>";
          echo "<td>".$dato["fecha_inicio"] . "</td>";
          echo "<td>".$dato["fecha_final"] . "</td>";
          echo "<td>".$dato["lugar"] . "</td>";
          echo "<td>".$dato["estado"] . "</td>";
          echo "</tr>";
        }
      ?>
      </tbody>
    </table>
</body>
</html>