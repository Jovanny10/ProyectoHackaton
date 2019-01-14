<?php 

require_once '../../classm/config/conexion.php';
$conexion = new Conexion();
$sql = "SELECT Nombre,Email,Celular FROM `participantes` WHERE Rol_idRol = '1'";
$registro = $conexion->query($sql);
$tabla = "";

$id = 1;
while($row = mysqli_fetch_array($registro)){
	$detalles = "<p class = 'text-center'><i class = 'fas fa-ellipsis-h'></i><p>";
	$editar  = '<a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"#\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

	$tabla.='{
				"id":"'.$id.'",
				"nombre":"'.$row['Nombre'].'",
				"email":"'.$row['Email'].'",
				"celular":"'.$row['Celular'].'",
				"detalles":"'.$detalles.'",
				"acciones":"'.$editar." ".$eliminar.'"

	},';
	$id++;
}
	//Eliminamos la coma que sobra
	$tabla= substr($tabla,0, strlen($tabla)-1); 
	echo '{"data":['.$tabla.']}'; 



?>