<?php 
	/**
	 * 
	 */
	require_once 'config/conexion.php';
	class lider
	{
		public function VisualizarLider($id){
			$conexion = new Conexion();
			$sql = "SELECT * FROM participantes WHERE idPersona ='$id'";
			$resultado = $conexion->query($sql);
			$array = $resultado->fetch_assoc();
			$json = json_encode($array);
			return $json;
		}
	}
?>