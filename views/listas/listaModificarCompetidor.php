<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/formulario.css">
    <script src="assets/js/form.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
        <form action="index.php?c=listas&a=actualizarCompetidor" target="_blank" method="POST" name="modCompetidor" id="formulario" onsubmit="return validarFormulario(this)">
        <input type="hidden" name="id" value="<?php echo $data ["Competidor"]["idCompetidores"]?>">
        <div class="logo">
            <img src="assets/images/logo.svg" width="220px" height="220px">
        </div>
           <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="Nombre" value="<?php echo $data["Competidor"]["nombre"]?>" placeholder="Nombre"><br><br>
        
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="Apellido" value="<?php echo $data["Competidor"]["apellido"]?>" placeholder="Apellido"><br><br>

            <label for="fNac">Edad:</label>
            <input type="date" id="edad" name="Edad" value="<?php echo $data["Competidor"]["fechaNac"]?>"><br><br>
    
            <label for="cedula">Cedula:</label>
            <input type="text" id="ci" name="Cedula" value="<?php echo $data["Competidor"]["ci"]?>" placeholder="C.I" oninput="validarNumero(this)"><br><br>
    
            <label for="departamento">Departamento:</label>
            <select id="departamento" name="Departamento" value="<?php echo $data["Competidor"]["departamento"]?>">
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
            <select id="genero" name="Genero" value="<?php echo $data["Competidor"]["genero"]?>">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
            </select><br><br>

            <div class="boton-ingresar">
            <button type="submit" class="btn">
                <span class="transition"></span>
                <span class="gradient"></span>
                <span class="label">Ingresar</span>
            </button></div><br><br>
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