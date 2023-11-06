<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/formulario.css">
    <script src="assets/js/form.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
        <form action="index.php?c=Usuarios&a=enviarFormulario" target="_blank" method="post" id="formulario" onsubmit="return validarFormulario(this)">
        <div class="logo">
            <img src="assets/images/logo.svg" width="300px" height="300px">
        </div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="Nombre" value="" placeholder="Nombre" maxlength="50"><br><br>
        
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="Apellido" value="" placeholder="Apellido" maxlength="50"><br><br>

            <label for="fNac">Fecha de nacimiento:</label>
            <input type="date" id="edad" name="Edad" placeholder="DD/MM/AAAA"><br><br>
    
            <label for="cedula">Cedula:</label>
            <input type="text" id="ci" name="Cedula" value="" placeholder="C.I" oninput="validarNumero(this)"><br><br>
    
            <label for="departamento">Departamento:</label>
            <select id="departamento" name="Departamento">
            <option value="Artigas">Artigas</option>
            <option value="Canelones">Canelones</option>
            <option value="Cerro Largo">Cerro Largo</option>
            <option value="Colonia">Colonia</option>
            <option value="Durazno">Durazno</option>
            <option value="Flores">Flores</option>
            <option value="Florida">Florida</option>
            <option value="Lavalleja">Lavalleja</option>
            <option value="Maldonado">Maldonado</option>
            <option value="Montevideo">Montevideo</option>
            <option value="Paysandú">Paysandú</option>
            <option value="Río Negro">Río Negro</option>
            <option value="Rivera">Rivera</option>
            <option value="Rocha">Rocha</option>
            <option value="Salto">Salto</option>
            <option value="San José">San José</option>
            <option value="Soriano">Soriano</option>
            <option value="Tacuarembó">Tacuarembó</option>
            <option value="Treinta y Tres">Treinta y Tres</option>
            </select><br><br>

            <label for="genero">Genero:</label>
            <select id="genero" name="Genero">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro</option>
            </select><br><br>

            <div class="boton-ingresar">
            <button type="submit" class="btn">
                <span class="transition"></span>
                <span class="gradient"></span>
                <span class="label">Ingresar</span>
            </button></div><br>
        </form>
        <nav class="volver">
            <div class="boton-volver">
            <a href="index.php?c=Usuarios&a=index"><button class="btn1">
                <span class="transition"></span>
                <span class="gradient"></span>
                <span class="label">Volver</span>
            </a></button></div>
        </nav>
</body>
</html>