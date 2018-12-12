$(document).ready(function(){
	visualizar();
})


function visualizar(){
	var id = document.getElementById("id").value;
	$.ajax({
		url: '../../modulosc/liderproyecto/perfil.php',
		type:'POST',
		data:{id:id},
		beforeSend:function(respuesta){

		}
	})

	.done(function(resp){
		var objeto = JSON.parse(resp);
		$('#nombre').val(objeto.Nombre);/*Visuaizando el nombre*/
		$('#nombre1').val(objeto.Nombre);/*Visualizando nombre en el modal*/
		Apellidos = objeto.App+" "+objeto.Apm;
		$('#Apellidos').val(Apellidos);
		$('#App').val(objeto.App);
		$('#Apm').val(objeto.Apm);
		$('#Correos').val(objeto.Email);
		$('#email1').val(objeto.Email);
		$('#cel').val(objeto.Celular);
		$('#telefono').val(objeto.Celular);
		$('#nacimiento').val(objeto.FNacimiento);
		$('#fecha1').val(objeto.FNacimiento);
		$('#facebook').val(objeto.Facebook);
		$('#twitter1').val(objeto.Twitter);
		$('#habilidad1').val(objeto.Habilidad);
		$('#hobbie1').val(objeto.Hobbie);
		$('#playera1').val(objeto.TallaPlayera_idTallaPlayer);
		$('#psw1').val(objeto.Psw);
		$('#idInstitucion').val(objeto.Institucion_idInstitucion);


	})
}