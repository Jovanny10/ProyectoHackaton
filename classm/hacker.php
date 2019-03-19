<?php 
	/**
	 * 
	 */
	require_once 'config/conexion.php';
	class hacker
	{
		
		public function VisualizarPerfil($id){
			$conexion = new Conexion(); 
			$sql = "SELECT `idPersona`, `Nombre`, `App`, `Apm`, `Email`, `Psw`, `Celular`, `FNacimiento`, `Facebook`, `Twitter`, `Habilidad`, `Hobbie`, `idInstitucion`, `Institucion`, `idCarrera`, `Carrera`, `idTallaPlayera`, `Talla`, `idSexo`, `Sexo` FROM `vistaparticipantes` WHERE `idPersona` = '$id'";
			$resultado = $conexion->query($sql);
			$array = $resultado->fetch_assoc();
			return $array; 	
		}

		public function EditarPerfil($id,$nombre,$apellidos,$email,$cel,$fecha){
			$conexion = new Conexion();
			$sql = "UPDATE `participantes` SET `Nombre`='$nombre',`App`='$apellidos',`Email`='$email',`Celular`='$cel',`FNacimiento`='$fecha' WHERE idPersona = '$id'";
			$resultado = $conexion->query($sql);
			return $resultado;
			$conexion->cerrar();
		}
	}


	$nuevo = new hacker();
	$nuevo->VisualizarPerfil(1);
?>