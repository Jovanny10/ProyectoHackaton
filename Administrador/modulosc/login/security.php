<?php 
	session_start();
	function verificar_session(){
		if(!isset($_SESSION['activo'])){
			unset($_SESSION);
			header("location:../index.html");
		}
	}


?>