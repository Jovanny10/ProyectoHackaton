<?php 
	/**
	 * 
	 */

	require_once 'config/conexion.php';
	class lider
	{
		
		public function Visualizarlider(){
			$conexion = new Conexion();
			$sql = "SELECT Nombre,Email,Celular FROM `participantes` WHERE Rol_idRol = '2'";
			$resultado = $conexion->query($sql);
			return $resultado;
		}
	}

?>