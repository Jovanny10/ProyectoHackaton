<?php 
	/**
	 * 
	 */
	class usuario
	{
		
		function identificar($email,$password)
		{
			require_once 'config/conexion.php';
			$conexion = new Conexion();
			$encriptado =md5($password);
			$contenido = $conexion->query("SELECT `Nombre`,`Apellidos`,`E-mail`,`Celular`,`Rol_idRol` FROM `comunidad` WHERE `E-mail`='$encriptado' and `psw` = '$password'");
		    return $contenido;

		}
	}

?>