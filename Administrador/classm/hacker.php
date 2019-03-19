<?php 
	/**
	 * 
	 */

	require_once 'config/conexion.php';
	class hacker
	{
		
		public function Visualizarhackers(){
			$conexion = new Conexion();
			$sql = "SELECT Nombre,Email,Celular FROM `participantes` WHERE Rol_idRol = '1'";
			$resultado = $conexion->query($sql);
			return $resultado;
		}
	}

?>