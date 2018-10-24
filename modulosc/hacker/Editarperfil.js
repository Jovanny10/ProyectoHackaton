$(document).ready(function(){
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
		})
	 })
})