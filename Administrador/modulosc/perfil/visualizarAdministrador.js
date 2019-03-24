$(function(){
	visualizarAdministrador1();
})

function visualizarAdministrador1(){
	var id = document.getElementById("id").value;
	$.ajax({
		url:'../modulosc/perfil/perfilAdmin.php',
		type:'POST',
		data:{id:id},
		beforeSend:function(respuesta){

		}
	})
	.done(function(resp){
		var objeto = JSON.parse(resp);
		$('#nombre').val(objeto.Nombre);
		$('#nombre1').val(objeto.Nombre);
		$('#App1').val(objeto.app);
		$('#Apm1').val(objeto.apm);
		Apellidos1 = objeto.app+" "+ objeto.apm;
		$('#Apellidos').val(Apellidos1);
		$('#Correo').val(objeto.correo);
		$('#email1').val(objeto.correo);
		$('#cel').val(objeto.telefono);
		$('#telefono1').val(objeto.telefono);

		$('#psw').val(atob(objeto.pwd));
	})
}
