<?php 
	/**
	 * 
	 */
	class perfilcontrolador
	{
		    function visualizar($id)
		    {
				require_once '../../classm/hacker.php';
				$controlador  = new hacker();
				$resultado = $controlador->VisualizarPerfil($id);
				return $resultado;
		    }
	}
?>