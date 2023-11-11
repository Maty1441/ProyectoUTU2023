<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/formularioTorneo.css">
    <script src="assets/js/formTorneo.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<div class="titulo">
    <img src="assets/images/logo.svg" width="220px" height="220px">
</div>
<h1>Seleccione los detalles del torneo:</h1>
    <div class="formulario">
        <form action="index.php?c=torneo&a=enviarTorneo" target="_blank" method="post" id="formulario" onsubmit="return validarFechas(this)">
            <label for="fIni">Fecha de Inicio:</label>
            <input type="date" id="fInicio" name="Inicio" placeholder=""><br><br>

            <label for="fFin">Fecha de Finalización:</label>
            <input type="date" id="fFin" name="Fin" placeholder=""><br><br>

            <label for="lugar">Ubicación:</label>
            <input type="text" id="lugar" name="Lugar" value="" placeholder="Ubicación del Torneo" maxlength="50" oninput="validarNombre()"><br><br>

            <div class="boton-ingresar">
                <button type="submit" class="btn">
                    <span class="transition"></span>
                    <span class="gradient"></span>
                    <span class="label">Ingresar</span>
                </button>
            </div>
        </form>
    </div>
<div class="boton-volver">
    <a href="index.php?c=torneo&a=botonVolver">
        <button class="btn1">
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Volver</span>
        </button>
    </a>
</div>
</body>
</html>