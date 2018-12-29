<?php 
	/**
	 * 
	 */
	class paginas
	{
		
		public function cargarpagina($pagina){
			switch ($pagina) {
				case '1':
					require_once 'perfilLider.php';/*Perfil lider del proyecto*/
					break;
				case '2':
				    include_once 'registroproyecto.php';
				    break;
				case '3': 
				    include_once 'IntegrantesEquipo.php';
				    break;
				case '33':
					include_once 'solicitudesRecibidas.php';
					break;
				case '4':
					include_once 'perfilHacker.php';
				    break;
				case '5':
					include_once 'catalogoproyectos.php';
				 	break;
				case '6':
					include_once 'misproyectos.php';
					break;
				case '7':
				    include_once 'solicitudesEnviadas.php';
					break;
				
				default:
					break;
			}
		}
	}
?>