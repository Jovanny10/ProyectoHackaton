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
		    console.log(objeto);
			$('#nombre').val(objeto.Nombre);
			$('#nombre1').val(objeto.Nombre);
			$('#Apellidos').val(objeto.Apellidos);
			$('#apellidos1').val(objeto.Apellidos);
			$('#Correos').val(objeto.mail);
			$('#email1').val(objeto.mail);
			$('#cel').val(objeto.Celular);
			$('#telefono').val(objeto.Celular);
			$('#nacimiento').val(objeto.FechaNacimiento);
			$('#fecha1').val(objeto.FechaNacimiento);
	})
}