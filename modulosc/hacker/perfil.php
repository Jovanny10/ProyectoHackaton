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
				/*while($row = mysqli_fetch_array($resultado)){
					echo $row['psw'];

				}*/
		    }
	}

	//$consulta = new perfilcontrolador();
	//$consulta->visualizar('4');
?>