<?php

class usuarios_modelo
{

    private $db;
    private $userValidado;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->userValidado = array();
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
}
?>