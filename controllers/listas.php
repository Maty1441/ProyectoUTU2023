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

		public function admin(){

			$Competidor = new competidores_Modelo();
			$data["titulo"] = "Administrador";
		
			require "views/admin/admin.php";
		}

		// --------- ↓ Funciones para cargar TABLAS ↓ --------- //

		public function listaCompetidores(){

			$Competidor = new competidores_Modelo();
			$data["titulo"] = "Lista de Competidores";
			$data["Competidor"] = $Competidor->get_competidores();
		
			require "views/listas/listaCompetidores.php";
		}

		public function listaClasificados(){

			$Competidor = new competidores_Modelo();
			$data["titulo"] = "Lista de Clasificados";
			$data["Competidor"] = $Competidor->get_clasificados();
		
			require "views/listas/listaClasificados.php";
		}

		// --------- ↑ Funciones para cargar TABLAS ↑ --------- //

		// --------- ↓ Funciones de tabla "COMPETIDOR" ↓ --------- //

		public function agregar($id){

			$competidores = new competidores_Modelo();
			$competidores->agregar($id);
			$data["titulo"] = "Agregar";
			$this->listaCompetidores();
		}

		public function actualizarCompetidor(){

			$id = $_POST["id"];
			$ci = $_POST["Cedula"];
			$nombre = $_POST["Nombre"];
			$apellido = $_POST["Apellido"];
			$edad = $_POST["Edad"];
			$departamento = $_POST["Departamento"];
			$genero = $_POST["Genero"];

			$Competidor = new competidores_Modelo();
			$Competidor->modificar($id, $ci, $nombre, $apellido, $edad, $departamento, $genero);
			$data["titulo"] = "Actualizar";
			$this->listaCompetidores();
		}

		public function modificar($id){			
			$Competidor = new competidores_Modelo();			
			$data["Competidor"] = $Competidor->get_competidor_por_id($id);
			$data["idCompetidor"] = $id;
			$data["titulo"] = "Modificar Competidor";
			require_once "views/listas/listaModificarCompetidor.php";
		}

		
		public function eliminar($id){
			
			$competidores = new competidores_Modelo();
			$competidores->eliminar($id);
			$data["titulo"] = "Eliminar";

			$this->listaCompetidores();
		}	

		// --------- ↑ Funciones de tabla "COMPETIDOR" ↑ --------- //
		
		// --------- ↓ Funciones de tabla "CLASIFICADOS" ↓ --------- //
		
		public function actualizarClasificado($id){

			$ci = $_POST["Cedula"];
			$nombre = $_POST["Nombre"];
			$apellido = $_POST["Apellido"];
			$edad = $_POST["Edad"];
			$departamento = $_POST["Departamento"];
			$genero = $_POST["Genero"];

			$Competidor = new competidores_Modelo();
			$Competidor->modificar($ci, $nombre, $apellido, $edad, $departamento, $genero);
			$this->index();
		}

		public function modificarClasificados($id){			
			$vehiculos = new competidores_Modelo();			
			$data["id"] = $id;
			$data["vehiculos"] = $vehiculos->get_competidores($id);
			$data["titulo"] = "Vehiculos";
			require_once "views/vehiculos/vehiculos_modifica.php";
		}

		public function eliminarClasificados($id){
			
			$competidores = new competidores_Modelo();
			$competidores->eliminarClasificados($id);
			$data["titulo"] = "Eliminar";
			$this->listaClasificados();
		}
		
		// --------- ↑ Funciones de tabla "CLASIFICADOS" ↑ --------- //
		
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
		
	}
?>