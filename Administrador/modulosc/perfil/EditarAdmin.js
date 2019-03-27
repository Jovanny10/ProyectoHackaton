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
				$('.error').html("Cargando...");
			}
	    })
		.done(function(resp){
			$('.error').html(resp);
			$('.error').fadeTo('slow',.9);
			$('.error').fadeTo('slow',.0);
			visualizarAdministrador1();
		});
	})
}