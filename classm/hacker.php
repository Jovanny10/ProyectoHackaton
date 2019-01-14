<?php 
	/**
	 * 
	 */
	require_once 'config/conexion.php';
	class hacker
	{
		
		public function VisualizarPerfil($id){
			$conexion = new Conexion(); 
			$sql = "SELECT * FROM participantes WHERE idPersona ='$id'";
			$resultado = $conexion->query($sql);
			$array = $resultado->fetch_assoc();
			$json =json_encode($array);
			return $json;
		}

		public function EditarPerfil($id,$nombre,$apellidos,$email,$cel,$fecha){
			$conexion = new Conexion();
			$sql = "UPDATE `participantes` SET `Nombre`='$nombre',`App`='$apellidos',`Email`='$email',`Celular`='$cel',`FNacimiento`='$fecha' WHERE idPersona = '$id'";
			$resultado = $conexion->query($sql);
			return $resultado;
			$conexion->cerrar();
		}
	}
?>