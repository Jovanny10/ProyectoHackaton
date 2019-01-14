$(function(){
	validarPerfilAdmin();
})

function validarPerfilAdmin(){
	$('form').submit(function(e){
		var datos = $(this).serialize();
		e.preventDefault();
		$.ajax({
			url:'../modulosc/perfil/validarPerfilAdmin.php',
			type: 'POST',
			data:datos,
			beforeSend:function(respuesta){
				$('.informacion').html("Cargando...");
			}
		})
		.done(function(resp){
			$('.informacion').html(resp);
			visualizar();
		})
	})
}