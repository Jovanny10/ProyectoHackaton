$(document).ready(function(){
   visualizar();      
})

function visualizar(){
	var id = document.getElementById("id").value;
	$.ajax({
		url:'perfil.php',
		type:'POST',
		data:id,
		beforeSend:function(respuesta){
			$('.informacion').html("Cargando ...");
		}
	})

	.done(function(resp){
		console.log(resp);
	})
}