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
		alert(resp[Nombre]);
/*=================VISUALIZAR========================*/
		$('#nombre').val(objeto.Nombre);
		Apellidos1 = objeto.App+" "+objeto.Apm;
		$('#Apellidos').val(Apellidos1);
		$('#Correos').val(objeto.Email);
		$('#cel').val(objeto.Celular);
		$('#nacimiento').val(objeto.FNacimiento);
/*=================FIN VISUALIZAR========================*/
/*=================EDITAR========================*/	
		$('#nombre1').val(objeto.Nombre);
		$('#App1').val(objeto.App);
		$('#Apm1').val(objeto.Apm);
		$('#email1').val(objeto.Email);
		$('#telefono1').val(objeto.Celular);
		$('#fecha1').val(objeto.FNacimiento);
		$('#facebook1').val(objeto.Facebook);
		$('#twitter1').val(objeto.Twitter);
		$('#habilidad1').val(objeto.Habilidad);
		$('#hobbie1').val(objeto.Hobbie);
		$('#psw1').val(objeto.Psw);
/*=================FIN EDITAR========================*/	
	})
}