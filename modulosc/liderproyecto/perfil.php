<?php 
	$id = $_POST['id'];
	require_once '../../classm/lider.php';
	$controlador = new lider();
	$resultado = $controlador->VisualizarLider($id);
	echo $resultado;

?>