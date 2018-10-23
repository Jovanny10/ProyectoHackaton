<?php 
	/**
	 * 
	 */
	require_once 'config/conexion.php';
	class hacker
	{
		
		public function VisualizarPerfil($id){
			$conexion = new Conexion(); 
			$sql = "SELECT * FROM comunidad WHERE id ='$id'";
			$resultado = $conexion->query($sql);
			return $resultado;
			$conexion->cerrar();
		}


	}
?>