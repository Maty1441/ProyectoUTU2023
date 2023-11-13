<?php
class torneo_Modelo {
    
    private $db;

    private $Torneo;

    public function __construct(){
        $this->db = Conectar::conexion();
        $this->Torneo = array();
    }

    public function get_torneos()
		{
			$sql = "SELECT * FROM torneo";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->Torneo[] = $row;
			}
			return $this->Torneo;
		}

        public function get_torneos_en_curso()
		{
			$sql = "SELECT * FROM torneo where estado = 'En Curso'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->Torneo[] = $row;
			}
			return $this->Torneo;
		}

        public function get_torneos_finalizados()
		{
			$sql = "SELECT * FROM torneo where estado = 'Finalizado'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->Torneo[] = $row;
			}
			return $this->Torneo;
		}

        public function enviarTorneo($nombre,$inicio, $fin, $lugar){

            $resultado = $this->db->query("INSERT INTO torneo (nombre, fecha_inicio, fecha_final, lugar) VALUES ('$nombre','$inicio', '$fin', '$lugar')");
        }

        public function eliminarTorneo($id){

            $resultado = $this->db->query("DELETE FROM torneo WHERE idCompetencia = '$id'");
        }

        public function finalizarTorneo($id){
            
            $resultado = $this->db->query("UPDATE `torneo` SET `estado` = 'Finalizado' WHERE `torneo`.`idCompetencia` = $id;");
        }

		public function buscar($nombre){

			$resultado = $this->db->query("SELECT * FROM torneo WHERE LOWER(nombre) LIKE LOWER('%$nombre%')");
			while($row = $resultado->fetch_assoc())
			{
				$this->Torneo[] = $row;
			}
			return $this->Torneo;
		}

}