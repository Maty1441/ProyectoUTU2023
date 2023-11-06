<?php
	
	class competidores_Modelo {
		
		private $db;
		private $competidores;
		
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
		
		public function agregar($id){
			
			$resultado = $this->db->query("INSERT INTO clasificados (idCompetidores) VALUES ('$id');");
			
		}

		public function insertar($nombre, $apellido, $fNac, $cedula, $departamento, $genero){
			
			$resultado = $this->db->query("INSERT INTO competidor (nombre, apellido, fecha_nacimiento, cedula, departamento, genero) VALUES ('$nombre', '$apellido', '$fNac', '$cedula', '$departamento', '$genero')");
	
		}
		
		public function modificar($id, $nombre, $apellido, $edad, $cedula, $departamento, $genero){
			
			$resultado = $this->db->query("UPDATE competidor SET nombre='$nombre', apellido='$apellido', fecha_nacimiento='$edad', ci='$cedula', departamento='$departamento', genero='$genero' WHERE idCompetidores = '$id'");
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM competidor WHERE idCompetidores = '$id'");
			
		}

		public function eliminarClasificados($id){
			
			$resultado = $this->db->query("DELETE FROM clasificados WHERE idCompetidores = '$id'");
			
		}
	
	} 
?>