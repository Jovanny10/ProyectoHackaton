<?php 
     $id = $_POST['id'];
     echo $id;
	 require_once '../../classm/hacker.php';
	 $controlador  = new hacker();
	 $resultado = $controlador->VisualizarPerfil($id);
	 echo $resultado;
?>