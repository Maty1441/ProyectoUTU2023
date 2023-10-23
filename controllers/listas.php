<?php
	
	class listas {
		
		public function __construct(){
			require_once "models/comeptidores.php";
		}
		
		public function index(){
			
			$vehiculos = new competidores_Modelo();
			$data["titulo"] = "Competidor";
			$data["vehiculos"] = $vehiculos->get_competidor();
			
			require_once "views/admin/admin.html";
		}
		
		public function guarda(){
			
			$id = $_POST['id'];
			$ci = $_POST["Cedula"];
			$nombre = $_POST["Nombre"];
			$apellido = $_POST["Apellido"];
			$edad = $_POST["Edad"];
			$departamento = $_POST["Departamento"];
			$genero = $_POST["Genero"];
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->modificar($id, $ci, $nombre, $apellido, $edad, $departamento, $genero);
			$this->index();
		}
		
//		public function modificar($id){
			
//			$vehiculos = new Vehiculos_model();
			
//			$data["id"] = $id;
//			$data["vehiculos"] = $vehiculos->get_vehiculo($id);
//			$data["titulo"] = "Vehiculos";
//			require_once "views/vehiculos/vehiculos_modifica.php";
//		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$ci = $_POST["Cedula"];
			$nombre = $_POST["Nombre"];
			$apellido = $_POST["Apellido"];
			$edad = $_POST["Edad"];
			$departamento = $_POST["Departamento"];
			$genero = $_POST["Genero"];

			$vehiculos = new Vehiculos_model();
			$vehiculos->modificar($id, $ci, $nombre, $apellido, $edad, $departamento, $genero);
			$this->index();
		}
		
		public function eliminar($id){
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->eliminar($id);
			$this->index();
		}	
	}
?>