<?php 
	/**
	 * 
	 */
	require_once 'config/conexion.php';
	class lider
	{
		public function VisualizarLider($id){
			$conexion = new Conexion();
			$sql = "SELECT * FROM comunidad WHERE id ='$id'";
			$resultado = $conexion->query($sql);
			$array = $resultado->fetch_assoc();
			$json = json_encode($array);
			return $json;
		}
	}
?>