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
				
			}
		}
	}

?>