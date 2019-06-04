<?php 
	require_once("../../classm/hacker.php");
	if(isset($_POST['id'])){
		if($_POST['id']!=''){
			$id=$_POST['id'];
			$eliminar=new hacker();
			$EliminarHacker=$eliminar->EliminarHacker($id);
			if($EliminarHacker=='1'){
				echo "Usuario eliminado";
			}else{
				echo "Dato referenciado:No se puede eliminar";
			}
		}
	}
?>