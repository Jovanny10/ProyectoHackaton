<?php
	require_once("../../classm/lider.php");
	if (isset($_POST['ideditar'],$_POST['correo']) && isset($_POST['contraseña']) && isset($_POST['celular'])){
		$id=$_POST['ideditar']; 
		$correo = $_POST['correo'];
		$psw=$_POST['contraseña'];
		$celular=$_POST['celular'];
		if(empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
			echo "Correo incorrecto";
		}else
		if(empty($psw)){
			echo "Contraseña incorrecta";
		}else
		if(empty($celular) || strlen($celular) != 10){
			echo "Telefono incorrecto";
		}else{
			require_once '../../classm/hacker.php';
			$instanciar = new lider();
			$pswencriptado  = base64_encode($psw);
			$modificar = $instanciar->ActualizarLider($id,$correo,$pswencriptado,$celular);
			if($instanciar){
				echo "Registro actualizado";
			}else{
				echo "No contiene datos";
			}
		}
	}
	if(!empty($_POST['id'])){
		if($_POST['id']!=''){
			$id=$_POST['id'];
			$eliminar=new lider();
			$EliminarLider=$eliminar->EliminarLider($id);
			if($EliminarLider=='1'){
				echo "Usuario eliminado";
			}else{
				echo "Dato referenciado:No se puede eliminar";
			}
		}
	}
?>