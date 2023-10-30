<?php

class UsuariosController
{

    public function __construct()
    {
        require_once "models/usuariosModelo.php";
}

public function index(){
    require_once "views/paginaPrincipal/paginaPrincipal.html";
}
    
    public function login()
{
        require "views/login/login.php";
    }

    public function verCampeonato()
{
        require "views/campeonato/elegirRama.html";
    }

    public function formulario()
{
        require "views/formulario/formulario.html";
    }

    public function admin()
{
        require "views/admin/admin.php";
    }

    public function listaCompetidores()
{
        $data["titulo"] = "Lista de Participantes";

        require "views/listas/listaParticipantes.php";
    }

    public function validar()
{
    $usuario = new usuarios_model();
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
        require "login/login.html";
    }
}
?>