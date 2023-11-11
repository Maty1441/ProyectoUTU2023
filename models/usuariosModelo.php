<?php

class usuarios_Modelo
{

    private $db;
    private $userValidado;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->userValidado = array();
        $this->competidores = array();
    }

    public function admin(){
        
        require "views/admin/admin.php";
    }

    public function juez(){

        require "views/juez/juez.php";
    }

    // ----------------- Para enviar y verificar ci del Formulario ----------------- // 

    public function ci_existe($ci)
{
    $sql = "SELECT COUNT(*) as count FROM competidor WHERE ci = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("s", $ci);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    return $data['count'] > 0;
}

    public function enviarFormulario($ci, $nombre, $apellido, $edad, $departamento, $genero){

        if ($this->ci_existe($ci)) {
            return false;
        }

        $sql = "INSERT INTO competidor (ci, nombre, apellido, fecha_Nac, departamento, genero) VALUES ('$ci', '$nombre', '$apellido', '$edad', '$departamento', '$genero');";
        $resultado = $this->db->query($sql);
    
        if ($resultado) {
            return true;
        } else {
            return false;
        } 
    }

    // ----------------- Para enviar y verificar ci del Formulario ----------------- // 

    public function get_validar($clave){
        $sql = "SELECT nombre FROM usuario WHERE clave = ?";
        $stmt = $this->db->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("s", $clave);
            $stmt->execute();
            $resultado = $stmt->get_result();
    
            if ($resultado->num_rows == 1) {
                $row = $resultado->fetch_assoc();
                $nombreUsuario = $row['nombre'];
    
                if (stripos($nombreUsuario, 'admin') !== false) {
                    return $this->admin();
                } elseif (stripos($nombreUsuario, 'juez') !== false) {
                    return $this->juez();
                }
            }
        }
        return false;
    }

}
?>