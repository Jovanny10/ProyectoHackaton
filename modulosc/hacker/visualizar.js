$(function(){
	visualizarHacker();
})

function visualizarHacker(){
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
		$('#Nombre').val(objeto.Nombre);
		$('#nombre1').val(objeto.Nombre);
		Apellidos1 = objeto.App+" "+objeto.Apm;
		$('#Apellidos').val(Apellidos1);
		$('#App1').val(objeto.App);
		$('#Apm').val(objeto.Apm);
		$('#Correos').val(objeto.Email);
		$('#email1').val(objeto.Email);
		$('#cel').val(objeto.Celular);
		$('#telefono').val(objeto.Celular);
		$('#nacimiento').val(objeto.FNacimiento);
		$('#fecha1').val(objeto.FNacimiento);
		$('#facebook1').val(objeto.Facebook);
		$('#twitter1').val(objeto.Twitter);
		$('#habilidad1').val(objeto.Habilidad);
		$('#hobbie1').val(objeto.Hobbie);
		$('#psw1').val(objeto.Psw);
	})
}