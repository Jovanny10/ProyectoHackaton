$(document).ready(function(){
	tablalider();
})
/*==========================================DETALLES================================================*/
function detalleslider(Nombre,Carrera,Habilidad,Hobbie,Facebook,FNacimiento,Sexo){
	$('#institucion').val(Nombre);
	$('#carrera').val(Carrera);
	$('#habilidad1').val(Habilidad);
	$('#hobbie1').val(Hobbie);
	$('#facebook').val(Facebook);
	$('#fecha1').val(FNacimiento);
	$('#sexo').val(Sexo);
}
/*==========================================FIN DETALLES================================================*/
/*==========================================EDITAR LIDER================================================*/

function editarlider(Id,Correo,Psw,Celular){
	$('#id').val(Id);
	$('#correoe').val(Correo);
	$('#p').val(atob(Psw));
	$('#celulare').val(Celular);
}

function editandolider(){
	id=$('#id').val();
	correo=$('#correoe').val();
	contrasena=$('#p').val();
	celular=$('#celulare').val();
	$.ajax({
		url: '../modulosc/lider/lider.php',
		type:'POST',
		data:{"ideditar":id,"correo":correo,"contraseña":contrasena,"celular":celular}
	})
	.done(function(resultado){
		alert(resultado);
	})
}
/*==========================================FIN EDITAR LIDER================================================*/
/*==========================================ELIMINAR LIDER================================================*/
let idEliminar="";
function eliminarlider(id){
	idEliminar=id;
}
function eliminandolider(){
	$.ajax({
		url:'../modulosc/lider/lider.php',
		type:'POST',
		data:{id:idEliminar}
	})
	.done(function(resultado){
		alert(resultado);
		tablalider();
	})
}


/*==========================================FIN ELIMINAR LIDER================================================*/
function tablalider(){
	$("#lider").dataTable({
		"destroy":true,
		"bDeferRender": true,			
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "../modulosc/lider/tablalider.php",
        	"type": "POST"
		},					
		"columns": [
			{ "data": "id" },
			{ "data": "nombre" },
			{ "data": "email" },
			{ "data": "celular" },
			{ "data": "detalles" },
			{ "data": "acciones" }
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
}