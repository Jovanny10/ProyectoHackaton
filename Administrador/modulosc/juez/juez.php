<?php
	require_once("../../classm/juez.php");
	if(isset($_POST['id'])){
		if($_POST['id']!=''){
			$id=$_POST['id'];
			$eliminar=new Juez();
			$EliminarJuez=$eliminar->EliminarJuez($id);
			if($EliminarJuez=='1'){
				echo "Usuario eliminado";
			}else{
				echo "Dato referenciado:No se puede eliminar";
			}
		}
	}
?>