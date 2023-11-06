<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/puntajes.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"];?></title>
</head>
<body>
<h1>CLASIFICADOS</h1>
<table class='primeraFila'>
    <tr>
        <th>POSICIÓN</th>
        <th>COMPETIDOR</th>
        <th>PUNTAJE DE LOS JUECES</th>
    </tr>
</table>
<?php
if ($data["Competidor"]) {
    echo "<table class='tabla'>";

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
</tbody>
</table>
</body>
</html>