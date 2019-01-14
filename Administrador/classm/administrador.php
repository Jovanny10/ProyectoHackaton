<?php 
	/**
	 * 
	 */

	require_once 'config/conexion.php';
	class Administrador
	{
		
		public function VisualizarPerfil($id){
			$conexion = new Conexion();
			$sql = "SELECT * FROM `administrador` WHERE idAdministrador = '$id'";
			$resultado = $conexion->query($sql);
			$array = $resultado->fetch_assoc();
			$json = json_encode($array);
			return $json;
		}
	}
?>