<?php

class UsuariosController
{

    public function __construct(){

        require_once "models/usuariosModelo.php";
}

    public function index(){

        require_once "views/paginaPrincipal/paginaPrincipal.php";
    }

    public function enviarContacto(){
        
        $nombre = $_POST["Nombre"];
        $email = $_POST["Email"];
        $tel = $_POST["Telefono"];
        $mensaje = $_POST["Mensaje"];

        $contacto = new usuarios_Modelo();
        $data["Contacto"] = $contacto->enviarContacto($nombre, $email, $tel, $mensaje);

        $this->index();
}
    
    public function login(){

        require "views/login/login.php";
    }

    public function verCampeonato(){

        require "views/campeonato/elegirRama.html";
    }

    public function formulario(){

        $data["titulo"] = "Registro de Competidor";
        require "views/formulario/formulario.php";
    }

    public function listaCompetidores(){

        $Competidor = new competidores_Modelo();
        $data["titulo"] = "Lista de Participantes";
        $data["Competidor"] = $Competidor->get_competidores();

        require "views/listas/listaParticipantes.php";
    }

    public function listaEliminados(){

        $data["titulo"] = "Lista de Eliminados";
        require "views/listas/listaEliminados.php";
    }

    public function admin(){
        
        require "views/admin/admin.php";
    }

    public function juez(){

        require "views/juez/juez.php";
    }

    public function puntuar(){

        require "views/juez/puntuar.php";
    }

    public function genero(){

        require "views/campeonato/elegirGenero.html";
    }

    public function enviarFormulario(){

        $ci = $_POST["Cedula"]; //Aca van los campos "name" del formulario
		$nombre = $_POST["Nombre"];
		$apellido = $_POST["Apellido"];
		$edad = $_POST["Edad"];
		$departamento = $_POST["Departamento"];
		$genero = $_POST["Genero"];

		$Competidor = new usuarios_Modelo();
		$Competidor->enviarFormulario($ci, $nombre, $apellido, $edad, $departamento, $genero);
		$this->formulario();
    }

    public function validar() {
        $usuario = new usuarios_modelo();
        $clave = $_POST['clave']; // Obtén la contraseña del formulario
    
        // Llama a la función get_validar con la contraseña
        $resultadoValidacion = $usuario->get_validar($clave);
    
        if ($resultadoValidacion === "admin") {
            return $this->admin();
        } elseif ($resultadoValidacion === "juez") {
            return $this->juez();
        } else {
            echo "Usuario No valido ..";
        }
    }

    public function cerrarSesion(){

        session_destroy();
        require "login/login.php";
    }
}
?>