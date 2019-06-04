<?php
	require_once("../../classm/lider.php");
	if(isset($_POST['id'])){
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