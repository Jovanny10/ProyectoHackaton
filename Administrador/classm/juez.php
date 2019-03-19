<?php 

	/**
	 * 
	 */

	require_once 'config/conexion.php';
	class Juez
	{
		
		public function VisualizarJuez(){
			$conexion = new Conexion();
			$sql = "SELECT Nombre,Email,Celular FROM `participantes` WHERE Rol_idRol = '3'";
			$resultado = $conexion->query($sql);
			return $resultado;
		}
	}
?>