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

    public function enviarFormulario($ci, $nombre, $apellido, $edad, $departamento, $genero){
        $sql = "INSERT INTO competidor (ci, nombre, apellido, fecha_nacimiento, departamento, genero) VALUES ('$ci', '$nombre', '$apellido', '$edad', '$departamento', '$genero');";
        $resultado = $this->db->query($sql);
    
        if ($resultado) {
            return true;
        } else {
            return false;
        }

        
    }
    

    public function get_validar($usuarioN, $clave)
    {
        $sql = "SELECT*FROM usuarios where $usuarioN='usuarioN' and clave='$clave'";
        $resultado = $this->db->query($sql);
        if($resultado->num_rows == 1){
            echo "USUARIO ENCONTRADO (modelo)";

            while($row = $resultado ->fetch_assoc()){
                $this->userValidado[] = $row;
                return $this->userValidado;
            }
        } else {
            return false;
        }
    }

    public function get_competidores()
		{
			$sql = "SELECT * FROM competidor";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->competidores[] = $row;
			}
			return $this->competidores;
		}
}
?>