<?php 
require_once '../../classm/lider.php';
$resultado = new lider();
$registro = $resultado->Visualizarlider();
$tabla = "";

$id = 1;
while($row = mysqli_fetch_array($registro)){
	$detalles = "<p class = 'text-center' data-toggle = 'modal' data-target = '#detalles'><i class = 'fas fa-plus-circle text-dark fa-2x'></i><p>";
	$editar  = '<a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editar\"><i class=\"fa fa-pencil-alt\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"#\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#eliminar\"><i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i></a>';

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
