	$(document).ready(function(){
		validarPerfil();
	})

	function validarPerfil(){
		$('form').submit(function(e){
			var datos = $(this).serialize();
			e.preventDefault();
			$.ajax({
				url:'../../modulosc/liderproyecto/validarPerfil.php',
				type:'POST',
				data:datos,
				beforeSend:function(respuesta){
					$('.informacion').html("Cargando.....");
				}
			})

			.done(function(resp){
				$('.informacion').html(resp);
			})
		})
	}