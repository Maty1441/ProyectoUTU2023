<?php
class usuariosControlador
{
    public function __construct()
    {
        require_once "modelos/usuariosModelo.php";
}
    
    public function login()
{
        require "usuarios/login.html";
    }

    public function validar()
{
    $usuario = new usuarios_modelo();
    $usuarioN = $_POST['usuarioN'];
    $clave = $_POST['clave'];
    $data["usuario"] = $usuario-> get_validar($usuarioN, $clave);

    if($data["usuario"]) {
        
        echo "USUARIO VALIDO (controlador)" . var_dump($data);
        $_SESSION['nombre'] = $data['usuario'][0]['nombre'];
        $_SESSION['username'] = $data ['usuario'][0]['usuarioN'];
        $_SESSION['rol'] = $data ['usuario'][0]['idRoles'];

        
        require "vista/usuarios/home.html";
    } else {
        echo "Usuario no valido.. " . var_dump($data);
    }

}

    public function cerrarSesion()
{
        session_destroy();

        require "vista/usuarios/login.html";
    }
}
?>