<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/puntaje.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntuar</title>
    <script src="assets/js/juez.js"></script> <!-- cambiar la ruta cuando introduzca mvc-->
</head>
<body>
    <div>
    <h1>Puntúa al competidor</h1>

        <h2>COMPETIDOR 1</h2>
        <div class="katas">
            <h3 class="txt1">KATA:</h3>
            <h3 class="txt2">Hangetsu</h3>
        </div>

        <form action="index.php?c=Usuarios&a=juez" target="_blank" method="post">
            <input type="text" id="inputField" value="5.0" min="5.0" max="10.0">
            <button type="button" id="sumar"><i class="fas fa-arrow-up"></i></button>
            <button type="button" id="restar"><i class="fas fa-arrow-down"></i></button>
            
            <a href="#" id="descalificar">DESCALIFICAR</a><br><br>
            
            <button type="submit" class="btn">CONFIRMAR PUNTAJE</button>
        </form>
    </div>
</body>
</html>