<?php
	
	class competidores_Modelo {
		
		private $db;
		public $competidores;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->competidores = array();
		}

		public function get_competidor_por_id($idCompetidores)
		{
			$sql = "SELECT * FROM competidor WHERE idCompetidores ='$idCompetidores' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
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

		public function get_clasificados()
		{
			$sql = "SELECT competidor.* FROM competidor INNER JOIN clasificados ON competidor.idcompetidores = clasificados.idcompetidores;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->competidores[] = $row;
			}
			return $this->competidores;
		}

		public function get_puntajes_ordenados(){

			$sql = "SELECT competidor.nombre, puntaje.puntajeRonda, RANK() OVER (ORDER BY puntaje.puntajeRonda DESC) AS posicion
			FROM competidor
			INNER JOIN clasificados ON competidor.idCompetidores = clasificados.idCompetidores
			INNER JOIN puntaje ON clasificados.idClasificados = puntaje.idClasificados
			ORDER BY puntaje.puntajeRonda DESC;";

			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->competidores[] = $row;
			}
			return $this->competidores;

		}
		
		public function agregar($id){
			
			$resultado = $this->db->query("INSERT INTO clasificados (idCompetidores) VALUES ('$id');");
			
		}

		public function insertar($nombre, $apellido, $fNac, $cedula, $departamento, $genero){
			
			$resultado = $this->db->query("INSERT INTO competidor (nombre, apellido, fechaNac, cedula, departamento, genero) VALUES ('$nombre', '$apellido', '$fNac', '$cedula', '$departamento', '$genero')");
	
		}
		
		public function modificar($id, $ci, $nombre, $apellido, $edad, $departamento, $genero){
			
			$resultado = $this->db->query("UPDATE competidor SET ci='$ci', nombre='$nombre', apellido='$apellido', fechaNac='$edad', departamento='$departamento', genero='$genero' WHERE idCompetidores = '$id'");
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM competidor WHERE idCompetidores = '$id'");
			
		}

		public function eliminarClasificados($id){
			
			$resultado = $this->db->query("DELETE FROM clasificados WHERE idCompetidores = '$id'");
			
		}

		public function buscar($nombre){

			$resultado = $this->db->query("SELECT * FROM competidor WHERE LOWER(nombre) LIKE LOWER('%$nombre%')");
			while($row = $resultado->fetch_assoc())
			{
				$this->competidores[] = $row;
			}
			return $this->competidores;
		}
	
	} 
?>