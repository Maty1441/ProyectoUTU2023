<?php
	
	class competidores_Modelo {
		
		private $db;
		private $competidores;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->competidores = array();
		}

		public function get_competidor($idCompetidores)
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
		
		public function insertar($nombre, $apellido, $fNac, $cedula, $departamento, $genero){
			
			$resultado = $this->db->query("INSERT INTO competidores ( nombre, apellido, fNac, cedula, departamento, genero) VALUES ('$nombre', '$apellido', '$fNac', '$cedula', '$departamento', '$genero')");
			
		}
		
		public function modificar($id, $nombre, $apellido, $fNac, $cedula, $departamento, $genero){
			
			$resultado = $this->db->query("UPDATE competidores SET nombre='$nombre', apellido='$apellido', fNac='$fNac', cedula='$cedula', departamento='$departamento', genero='$genero' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM competidores WHERE id = '$id'");
			
		}
	
	} 
?>