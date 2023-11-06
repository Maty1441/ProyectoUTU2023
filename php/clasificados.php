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

if ($data["Competidor"]) {
    echo "<table border='0'>
            <tr class='primeraFila'>
                <th>Posición</th>
                <th class='nombre'>Nombre</th>
                <th>Puntaje</th>
            </tr>";

    $contador = 1;

    foreach ($data["Competidor"] as $competidor) {
        echo "<tr>
                <td>" . $contador . "</td>
                <td class='nombre'>" . $competidor["nombre"] . "</td>
                <td>" . $competidor["puntajeRonda"] . "</td>
              </tr>";
        $contador++;
    }

    echo "</table>";
} else {
    echo "No se encontraron puntajes.";
}

?>
</body>
</html>