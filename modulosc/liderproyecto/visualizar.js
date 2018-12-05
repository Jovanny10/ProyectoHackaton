$(document).ready(function(){
	visualizar();
})


function visualizar(){
	var id = document.getElementById("id").value;
	$.ajax({
		url: '../../modulosc/liderproyecto/perfil.php',
		type:'POST',
		data:{id:id},
		beforeSend:function(respuesta){

		}
	})

	.done(function(resp){
		var objeto = JSON.parse(resp);
		$('#nombre').val(objeto.Nombre);/*Visuaizando en el*/
		$('#Apellidos').val(objeto.Apellidos);
		$('#Correos').val(objeto.mail);
		$('#cel').val(objeto.Celular);
		$('#nacimiento').val(objeto.FechaNacimiento);
	})
}