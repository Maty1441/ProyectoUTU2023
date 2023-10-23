<?php
	
	function cargarControlador($controlador) {

		$nombreControlador = ucwords($controlador)."conexion";
		$archivoControlador = 'controllers/'.ucwords($controlador).'.php';

		if(!is_file($archivoControlador)){
			
			$archivoControlador= 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}

		//Codigo si hay error
		if (!is_file($archivoControlador)) {
			die("Error: El controlador '$controlador' no se encuentra. Controlador buscado: '$nombreControlador'");
		}
		
		require_once $archivoControlador;
		//Codigo si hay error
		if (!class_exists($nombreControlador)) {
			die("Error: La clase del controlador '$nombreControlador' no se encuentra en el archivo.");
		}
		
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}

	function cargarAccion($controller, $accion, $id = null){
		
		if(isset($accion) && method_exists($controller, $accion)){
			if($id == null){
				$controller->$accion();
				} else {
				$controller->$accion($id);
			}
			} else {
			$controller->ACCION_PRINCIPAL();
		}	
	}
?>