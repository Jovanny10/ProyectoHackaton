	$(document).ready(function(){
		validarPerfil();
	})
	/*Nos permite  validar los campos del formulario*/
	function validarPerfil(){
		$('form').submit(function(e){
	 	var datos = $(this).serialize();
	 	e.preventDefault();
	 	$.ajax({
			url:'../../modulosc/hacker/validarPerfil.php',
			type:'POST',
			data:datos,
			beforeSend:function(respuesta){
				$('.informacion').html("Cargando.....");
			}
		})
		.done(function(resp){
			$('.informacion').html(resp);
			visualizar(); 
		})
	 })

	}
