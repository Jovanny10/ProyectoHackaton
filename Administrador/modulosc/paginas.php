<?php
	/**
	 * 
	 */
	class paginas
	{
		
		public function cargarpaginas($pagina){
			switch ($pagina) {
				case '1':
					require_once 'perfilAdministrador.php';
					break;
				case '2':
					require_once 'catalogoproyectos.php';
					break;
				case '3':
					require_once 'solicitudJuez.php';
					break;
				case '4':
					require_once 'hackers.php';
					break;
				case '5':
					require_once 'lider.php';
					break;
				case '6':
					require_once 'juez.php';
					break;
				case '7':
					require_once 'hackaton.php';
					break;
				case '8':
					require_once 'vertical.php';
					break;
				case '9':
					require_once 'rubricas.php';
					break;

			}
		}
	}

?>