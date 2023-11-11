<?php

class TorneoController
{

    public function __construct(){

        require_once "models/torneoModelo.php";
        require_once "models/competidoresModelo.php";
}

    public function index(){

        require "views/torneo/principal.php";
}

    // Botones de la pagina principal // 
    public function verNuevoTorneo(){

        require "views/torneo/iniciarTorneo.php";
}

    public function verTorneosEnCurso(){

        $Torneo = new torneo_Modelo();
        $data["titulo"] = "Torneos en curso";
        $data["Torneo"] = $Torneo->get_torneos_en_curso();

        require "views/torneo/torneosEnCurso.php";
}

    public function verTorneosFinalizados(){

        $Torneo = new torneo_Modelo();
        $data["titulo"] = "Torneos Finalizados";
        $data["Torneo"] = $Torneo->get_torneos_finalizados();

        require "views/torneo/torneosFinalizados.php";
}

    public function verFinalizarTorneo(){

        $Torneo = new torneo_Modelo();
		$data["titulo"] = "Finlaziar Torneo";
		$data["Torneo"] = $Torneo->get_torneos();
		
		require "views/torneo/finalizarTorneo.php";
    }


    public function botonVolver(){

        require "views/torneo/principal.php";
}

    // Botones de la pagina principal // 

    // Botones de Empezar Torneos // 
    public function enviarTorneo(){
    
        //Aca van los campos "name" del formulario
	    $inicio = $_POST["Inicio"];
	    $fin = $_POST["Fin"];
	    $lugar = $_POST["Lugar"];

	    $Torneo = new torneo_Modelo();
	    $Torneo->enviarTorneo($inicio, $fin, $lugar);

	    $this->verNuevoTorneo();
}

    // Botones de Empezar Torneos // 

    // Botones de Eliminar/Finalizar Torneos // 

    public function eliminarTorneo($id){
			
        $competidores = new torneo_Modelo();
        $competidores->eliminarTorneo($id);
        $data["titulo"] = "Eliminar";

        $this->verFinalizarTorneo();
}

    public function finalizarTorneo($id){
			
        $competidores = new torneo_Modelo();
        $competidores->finalizarTorneo($id);
        $data["titulo"] = "Eliminar";

        $this->verFinalizarTorneo();
}

    // Botones de Eliminar/Finalizar Torneos // 


    //public function crearGrupos($arreglo, $n) {
//
    //    $competidores = new competidores_Modelo();
    //    $competidores->get_competidores();
    //
    //    // Validar que haya suficientes registros en el arreglo original
    //    if (count($arreglo) < $n) {
    //    return false;
    //    }
//
    //    // Inicializa un arreglo vacío para almacenar los subarreglos
    //    $subarreglos = array();
//
    //    // Mezclar aleatoriamente el arreglo original
    //    shuffle($arreglo);
//
//
    //    // Dividir el arreglo en n subarreglos
    //    $numRegistros = count($arreglo);
    //    $registrosPorSubarreglo = ceil($numRegistros / $n);
//
    //    $cinturonesDisponibles = array("rojo", "negro");
    //    $dojosUsados = array();
//
    //    for ($i = 0; $i < $numRegistros; $i += $registrosPorSubarreglo) {
    //    $subarreglo = array_slice($arreglo, $i, $registrosPorSubarreglo);
    //    
//
    //    // Asignar un cinturón aleatorio a todos los registros en el subarreglo
    //    $cinturónAleatorio = $cinturonesDisponibles[array_rand($cinturonesDisponibles)];
    //    foreach ($subarreglo as &$registro) {
    //    $registro["cinturón"] = $cinturónAleatorio;
    //    }
//
//
    //    // Asegurarse de que los registros en el subarreglo tengan diferentes Dojos
    //    $dojosSubarreglo = array_column($subarreglo, "dojo");
    //    if (count(array_unique($dojosSubarreglo)) < count($dojosSubarreglo)) {
//
    //    // Si hay registros con el mismo Dojo, volvemos a mezclar
    //    shuffle($subarreglo);
    //    }
//
//
    //    // Agregar el campo "puntaje" con un valor 0.
    //    foreach ($subarreglo as &$registro) {
    //    $registro["puntaje"] = 0;
    //    }
//
    //    $subarreglos[] = $subarreglo;
    //    }
//
    //    return $subarreglos;
    //   
    //    // Ejemplo de uso:
    //    $tabla = array(
    //    array("id" => 1, "ci" => "12345", "dojo" => "Aikido", "nombre" => "Juan"),
    //    array("id" => 2, "ci" => "67890", "dojo" => "Karate", "nombre" => "María"),
    //    array("id" => 3, "ci" => "54321", "dojo" => "Judo", "nombre" => "Carlos"),
    //    array("id" => 4, "ci" => "98765", "dojo" => "Taekwondo", "nombre" => "Ana"),
    //    array("id" => 5, "ci" => "24680", "dojo" => "Kung Fu", "nombre" => "Luis"),
    //    array("id" => 6, "ci" => "13579", "dojo" => "Boxeo", "nombre" => "Laura")
    //    );
//
    //    $n =2; // Cantidad de elementos en cada subarreglo
//
    //    $subarreglos = crearGrupos($tabla, $n);
//
    //    // Imprimir los subarreglos resultantes
    //    foreach ($subarreglos as $index => $subarreglo) {
    //    echo "Subarreglo $index:\n";
//
    //    echo "<pre>";
    //    var_dump($subarreglo  );
    //    echo "</pre>";}
    //}


    public function crearGrupos($n) {
        $competidores = new competidores_Modelo();
        $competidores->get_competidores();
    
        // Validar que haya suficientes registros en el arreglo original
        if (count($competidores->competidores) < $n) {
            return false;
        }
    
        // Inicializa un arreglo vacío para almacenar los subarreglos
        $subarreglos = array();
    
        // Mezclar aleatoriamente el arreglo original
        shuffle($competidores->competidores);
    
        // Dividir el arreglo en n subarreglos
        $numRegistros = count($competidores->competidores);
        $registrosPorSubarreglo = ceil($numRegistros / $n);
    
        $cinturonesDisponibles = array("rojo", "negro");
        $dojosUsados = array();
    
        for ($i = 0; $i < $numRegistros; $i += $registrosPorSubarreglo) {
            $subarreglo = array_slice($competidores->competidores, $i, $registrosPorSubarreglo);
    
            // Asignar un cinturón aleatorio a todos los registros en el subarreglo
            $cinturónAleatorio = $cinturonesDisponibles[array_rand($cinturonesDisponibles)];
            foreach ($subarreglo as &$registro) {
                $registro["cinturón"] = $cinturónAleatorio;
            }
    
            // Asegurarse de que los registros en el subarreglo tengan diferentes Dojos
            $dojosSubarreglo = array_column($subarreglo, "dojo");
            if (count(array_unique($dojosSubarreglo)) < count($dojosSubarreglo)) {
                // Si hay registros con el mismo Dojo, volvemos a mezclar
                shuffle($subarreglo);
            }
    
            // Agregar el campo "puntaje" con un valor 0.
            foreach ($subarreglo as &$registro) {
                $registro["puntaje"] = 0;
            }
    
            $subarreglos[] = $subarreglo;
        }
    
        return $subarreglos;
    
    }
    public function mostrarArray(){
            $n = 2; // Cantidad de elementos en cada subarreglo
            $subarreglos = $this->crearGrupos($n);

            // Imprimir los subarreglos resultantes
            foreach ($subarreglos as $index => $subarreglo) {
                echo "Subarreglo $index:\n";
            
                echo "<pre>";
                var_dump($subarreglo);
                echo "</pre>";
        }
    }
}
?>