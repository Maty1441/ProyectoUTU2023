<?php

// Se incluyen los archivos necesarios
require_once "config/config.php"; // Incluir archivo de configuración
require_once "core/routes.php"; // Incluir archivo de rutas
require_once "config/database.php"; // Incluir archivo de configuración de la base de datos
require_once "controllers/conexion.php"; // Incluir archivo del controlador de Conexion
require_once "controllers/listasParticipantes.php"; // Incluir archivo del controlador de listas
require_once "controllers/usuariosControlador.php"; // Incluir archivo del controlador de Usuarios

// Se verifica si se ha proporcionado un parámetro 'c' en la URL
if (isset($_GET['c'])) {
    // Se carga el controlador correspondiente al valor de 'c'
    $controlador = cargarControlador($_GET['c']);
    
    // Se verifica si se han proporcionado los parámetros 'a' y 'id' en la URL
    if (isset($_GET['a'])) {
        if (isset($_GET['id'])) {
            // Se carga la acción del controlador con el valor de 'a' y 'id'
            cargarAccion($controlador, $_GET['a'], $_GET['id']);
        } else {
            // Se carga la acción del controlador con el valor de 'a'
            cargarAccion($controlador, $_GET['a']);
        }
    } else {
        // Si no se proporciona 'a', se carga la acción principal del controlador
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
} else {
    // Si no se proporciona 'c', se carga el controlador principal y se ejecuta la acción principal
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}
?>