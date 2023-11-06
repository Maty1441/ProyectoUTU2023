<?php

class conexion {
    private $conexion;

    public function __construct() {
        $this->conexion = new PDO("mysql:host=localhost;port=3306;dbname=torneo_bd", "root", ""); //cambiar el puerto de 33065 a 3306
    }

    //
    public function index(){
			
        $data["titulo"] = "Pagina principal";
        
        require_once "index.php";
    }
//-------------------------------------------------------------------
    //Obtengo datos de las tablas
    
    public function obtenerClasificados() {
        
        $query = "SELECT * FROM clasificados";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        // Devolver los resultados
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerCompetencia(){

        $query = "SELECT * FROM competencia";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerCompetidores(){

        $query = "SELECT * FROM competidores";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerEscuela(){

        $query = "SELECT * FROM escuela";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerJuez(){

        $query = "SELECT * FROM juez";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerKata(){

        $query = "SELECT * FROM kata";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerRegistro(){

        $query = "SELECT * FROM registro";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerRoles(){

        $query = "SELECT * FROM roles";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerUsuarios(){

        $query = "SELECT * FROM usuarios";
        $statement = $this->conexion->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------

    public function buscar($resultado_buscador) {
        $sql = "SELECT * FROM preconfirmado WHERE Nombre LIKE '%$resultado_buscador%'";
        $statement = $this->conexion->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>