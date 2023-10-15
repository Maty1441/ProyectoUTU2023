<?php
class conexion {
    private $conexion;

    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;port=33065;dbname=torneo_bd", "root", ""); //cambiar el puerto de 33065 a 3306
    }
//-------------------------------------------------------------------
    //Obtengo datos de las tablas
    
    public function obtenerClasificados() {
        
        $query = "SELECT * FROM clasificados";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // Devolver los resultados
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerCompetencia(){

        $query = "SELECT * FROM competencia";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerCompetidores(){

        $query = "SELECT * FROM competidores";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerEscuela(){

        $query = "SELECT * FROM escuela";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerJuez(){

        $query = "SELECT * FROM juez";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerKata(){

        $query = "SELECT * FROM kata";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerRegistro(){

        $query = "SELECT * FROM registro";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerRoles(){

        $query = "SELECT * FROM roles";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
//-------------------------------------------------------------------
    public function obtenerUsuarios(){

        $query = "SELECT * FROM usuarios";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Uso del Modelo de Acceso a Datos desde un controlador
$databaseModel = new conexion();
$datos = $databaseModel->obtenerDatosDeTabla();
?>