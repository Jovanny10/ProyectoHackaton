<?php 
     $id = $_POST['id'];
	 require_once '../../classm/hacker.php';
	 $controlador  = new hacker();
	 $resultado = $controlador->VisualizarPerfil($id);
	 print_r( $resultado);
?>