<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>
<body>
    <h1><span>O.</span><span class="colorLetraK">K</span><span>.C.</span></h1>
    <h2>Official <span class="colorLetraK">Karate</span> Championship</h2>
    <h3>¿Eres un juez o administrador?<br>Ingrese la contraseña:</h3>

<form action="../../php/login.php" target="_blank" method="post">
<div><label for="passwd"></label>
    <input type="text" id="passwd" name="contraseña" value="" placeholder="Contraseña" maxlength="50"><br><br>
</div>
        <button type="submit" class="boton-ingresar">
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="label">Ingresar</span>
        </button><br><br>
</form>
<nav class="volver">
    <a href="index.php?c=Usuarios&a=index"><button class="btn1">
        <span class="transition"></span>
        <span class="gradient"></span>
        <span class="label">Volver</span>
    </button></a>
</nav>
</body>
</html>