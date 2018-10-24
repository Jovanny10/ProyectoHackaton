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

		public function EditarPerfil($id,$nombre,$apellidos,$email,$cel,$fecha){
			$conexion = new Conexion();
			$sql = "UPDATE `comunidad` SET `Nombre`='$nombre',`Apellidos`='$apellidos',`E-mail`='$email',`Celular`='$cel',`FechaNacimiento`='$fecha' WHERE id = '$id'";
			$resultado = $conexion->query($sql);
			return $resultado;
			$conexion->cerrar();
		}
	}
?>