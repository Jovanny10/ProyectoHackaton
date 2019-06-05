<?php 
require_once '../../classm/lider.php';
$resultado = new lider();
$registro = $resultado->VisualizarLider();
$tabla = "";

$id = 1;
while($row = mysqli_fetch_array($registro)){
	$detalles = '<a data-toggle=\"modal\" data-target=\"#detalles\"><i class=\"fas fa-plus-circle fa-2x\" align=\"center\" aria-hidden=\"true\" onclick=\"detalleslider('."'".$row['Institucion']."','".$row['Carrera']."','".$row['Habilidad']."','".$row['Hobbie']."','".$row['Facebook']."','".$row['FNacimiento']."','".$row['Sexo']."'".')\"></i></a>';
	$editar  = '<a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editar\"><i class=\"fa fa-pencil-alt\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"#\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#eliminar\"><i class=\"fas fa-trash-alt\" aria-hidden=\"true\"onclick=\"eliminarlider('."'".$row['idPersona']."'".')\"></i></a>';

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
