<?php 
	/**
	 * 
	 */
	class paginas
	{
		
		public function cargarpagina($pagina){
			switch ($pagina) {
				case '1':
					include_once 'perfil.php';
					break;
				case '2':
				    include_once 'registroproyecto.php';
				    break;
				case '3':
				    include_once 'solicitudes.php';
				    break;
				case '4':
					include_once 'perfil.php';
				    break;
				case '5':
					include_once 'registroproyecto.php';
				 	break;
				case '6':
					include_once 'solicitudes.php';
					break;
				case '7':
					break;
				
				default:
					
					break;
			}
		}
	}
?>