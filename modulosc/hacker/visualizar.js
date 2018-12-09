$(document).ready(function(){
   visualizar();      
})

function visualizar(){
	    var id = document.getElementById("id").value;
		$.ajax({
		url:'../../modulosc/hacker/perfil.php',
		type:'POST',
		data:{id:id},
		beforeSend:function(respuesta){
		}
	})

	.done(function(resp){
		var objeto = JSON.parse(resp);
			$('#nombre').val(objeto.Nombre);
			$('#Apellidos').val(objeto.App);
			$('#Correos').val(objeto.Email);
			$('#cel').val(objeto.Celular);
			$('#nacimiento').val(objeto.FNacimiento);
	})
}