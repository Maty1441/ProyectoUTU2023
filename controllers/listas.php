<?php
	
	class ListasController {
		
		public function __construct(){
			require_once "models/competidoresModelo.php";
		}
		
		public function index(){
			
			$Competidor = new competidores_Modelo();
			$data["titulo"] = "Competidor";
			$data["Competidor"] = $Competidor->get_competidores();
			
			require_once "views/admin/admin.html";
		}

		public function listaParticipantes(){

			$Competidor = new competidores_Modelo();
			$data["titulo"] = "Lista de Participantes";
			$data["Competidor"] = $Competidor->get_competidores();
		
			require "views/listas/listaParticipantes.php";
		}

		public function listaClasificados(){

			$Competidor = new competidores_Modelo();
			$data["titulo"] = "Lista de Participantes";
			$data["Competidor"] = $Competidor->get_clasificados();
		
			require "views/listas/listaParticipantes.php";
		}
		
		
		public function guarda(){
			
			$id = $_POST['id'];
			$ci = $_POST["Cedula"];
			$nombre = $_POST["Nombre"];
			$apellido = $_POST["Apellido"];
			$edad = $_POST["Edad"];
			$departamento = $_POST["Departamento"];
			$genero = $_POST["Genero"];
			
			$Competidor = new competidores_Modelo();
			$Competidor->modificar($id, $ci, $nombre, $apellido, $edad, $departamento, $genero);
			$this->index();
		}
		
		public function modificar($id){			
			$vehiculos = new competidores_Modelo();			
			$data["id"] = $id;
			$data["vehiculos"] = $vehiculos->get_competidores($id);
			$data["titulo"] = "Vehiculos";
			require_once "views/vehiculos/vehiculos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$ci = $_POST["Cedula"];
			$nombre = $_POST["Nombre"];
			$apellido = $_POST["Apellido"];
			$edad = $_POST["Edad"];
			$departamento = $_POST["Departamento"];
			$genero = $_POST["Genero"];

			$Competidor = new competidores_Modelo();
			$Competidor->modificar($id, $ci, $nombre, $apellido, $edad, $departamento, $genero);
			$this->index();
		}
		
		public function eliminar($id){
			
			$Competidor = new competidores_Modelo();
			$Competidor->eliminar($id);
			$this->index();
		}	
	}
?>