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
			$array = $resultado->fetch_assoc();
			$json = json_encode($array);
			return $json;
		}

		public function EditarPerfil($id,$nombre,$apellidos,$email,$cel,$fecha){
			$conexion = new Conexion();
			$sql = "UPDATE `comunidad` SET `Nombre`='$nombre',`Apellidos`='$apellidos',`mail`='$email',`Celular`='$cel',`FechaNacimiento`='$fecha' WHERE id = '$id'";
			$resultado = $conexion->query($sql);
			return $resultado;
			$conexion->cerrar();
		}
	}
?>