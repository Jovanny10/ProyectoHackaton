<?php 
	/**
	 * 
	 */

	require_once 'config/conexion.php';
	class lider
	{
		
		public function VisualizarLider(){
			$conexion = new Conexion();
			$sql = "SELECT `participantes`.`idPersona`,`participantes`.`Nombre`,`participantes`.`App`,`participantes`.`Apm`,`participantes`.`Email`,`participantes`.`Celular`,`participantes`.`FNacimiento`,`participantes`.`Facebook`,`participantes`.`Twitter`,`participantes`.`Habilidad`,`participantes`.`Hobbie`,`institucion`.`Institucion`,`carrera`.`Carrera`,`tallaplayera`.`Talla`,`sexo`.`Sexo` FROM `participantes` INNER JOIN `institucion` ON `participantes`.`Institucion_idInstitucion`=`institucion`.`idInstitucion` INNER JOIN `carrera` ON `participantes`.`Carrrera_idCarrrera`=`carrera`.`idCarrera` INNER JOIN `tallaplayera` ON `participantes`.`TallaPlayera_idTallaPlayera`=`tallaplayera`.`idTallaPlayera` INNER JOIN `sexo` ON `participantes`.`Sexo_idSexo`=`sexo`.`idSexo` WHERE Rol_idRol = '2'";
			$resultado = $conexion->query($sql);
			return $resultado;
		}

		public function EliminarLider($id){
			$conexion = new Conexion();
			$sql="DELETE FROM `participantes` WHERE `idPersona`='".$id."'";
			$resultado=$conexion->query($sql);
			return $resultado;
		}
	}

?>