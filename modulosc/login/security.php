<?php 
	session_start();
	function verificar_session(){
		if(!isset($_SESSION['activo'])){//Verifica si fué activada la session, en caso de no existir
			unset($_SESSION);//destrue la session
			header("location:../../index.html");//y  por ultimo me direcciona al index.php
		}
	}


?>