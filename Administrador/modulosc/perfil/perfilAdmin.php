<?php
	 $id  = $_POST['id'];
	 require_once '../../classm/administrador.php';
	 $controlador = new Administrador();
	 $resultado = $controlador->VisualizarPerfil($id);
	 echo $resultado;
?>