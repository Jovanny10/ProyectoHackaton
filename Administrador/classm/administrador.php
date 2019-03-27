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

		public function Editarperfil($id,$nombre,$apaterno,$amaterno,$correo,$telefono,$contrasena){
			$conexion = new Conexion();
			$sql = "UPDATE `administrador` SET `idAdministrador`=$id, `Nombre`='$nombre', `app`='$apaterno', `apm`='$amaterno', `correo`='$correo', `telefono`=$telefono, `pwd`='$contrasena',`status`=1 WHERE 1 ";
			$resultado = $conexion->query($sql);
		}
	}
?>