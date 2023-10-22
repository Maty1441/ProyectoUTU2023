<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../assets/css/listaParticipantes.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
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
<?php
  echo "<table border='0'>
          <tr class='primera-fila'>
            <th class='nom'>NOMBRE COMPLETO</th>
            <th>RAMA</th>
            <th>CEDULA</th>
            <th>AGREGAR</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
          </tr>";

    echo "<tr>
            <td>NOOOO LEWIS</td>
            <td>PORQUE TE</td>
            <td>FUISTES</td>";
        echo "<td><a href=# >AGREGAR</a></td>";
              //'index.php?c=vehiculos&a=nuevo".$dato["id"]."' class='btn btn-warning'>AGREGAR</a></td>";
        echo "<td><a href=# >MODIFICAR</a></td>";
              //'index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>MODIFICAR</a></td>";
        echo "<td><a href=# >ELIMINAR</a></td>";
              //'index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>ELIMINAR</a></td>";
        echo "</tr>";

    echo "<tr>
            <td>NOOOO LEWIS</td>
            <td>PORQUE TE</td>
            <td>FUISTES</td>";
        echo "<td><a href=# >AGREGAR</a></td>";
              //'index.php?c=vehiculos&a=nuevo".$dato["id"]."' class='btn btn-warning'>AGREGAR</a></td>";
        echo "<td><a href=# >MODIFICAR</a></td>";
              //'index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>MODIFICAR</a></td>";
        echo "<td><a href=# >ELIMINAR</a></td>";
              //'index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>ELIMINAR</a></td>";
        echo "</tr>";
          
    echo "<tr>
            <td>NOOOO LEWIS</td>
            <td>PORQUE TE</td>
            <td>FUISTES</td>";
        echo "<td><a href=# >AGREGAR</a></td>";
              //'index.php?c=vehiculos&a=nuevo".$dato["id"]."' class='btn btn-warning'>AGREGAR</a></td>";
        echo "<td><a href=# >MODIFICAR</a></td>";
              //'index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>MODIFICAR</a></td>";
        echo "<td><a href=# >ELIMINAR</a></td>";
              //'index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>ELIMINAR</a></td>";
        echo "</tr>";

  echo "</table>";
?>
</body>
</html>