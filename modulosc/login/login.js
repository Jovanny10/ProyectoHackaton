$(document).ready(function(){
	$('form').submit(function(e){
		var data = $(this).serialize();
		e.preventDefault();
		$.ajax({
			url:'modulosc/login/proceso.php',
			type:'POST',
			data:data,
			//Funcion para mostrar un icono
			beforeSend:function(){
				//Se carga el icono y se esconde en always
				$('.fas').css('display','inline');
			}
		})//CABACERA DEL METODO AJAX, EL QUE SE VA A EJECUTAR PRIMERO
		.done(function(resp){//Cuando lo que nos devuelva sea cierto, true, cuando se recibe la respuesta del servidor
			$('.error').html(resp);
			if(resp == 3){
				$('.error').hide();
				location.href = "view/Juez/index.php";
			}else
			if(resp == 5){
				$('.error').hide();
				location.href = "view/LiderProyecto/index.php";
			}else{
				$('.error').hide();
				location.href = "view/Hacker/index.php";
			}
		})
		.always(function(){//Se ejecuta siempre,cuando se termina el request,se utiliza cuando hacemos una busqueda podemos utilizar un icono recargando
			//antes de que se haga el request se muestra el icono y en always se esconde
			setTimeout(function(){
				$('.fas').hide();
				location.href = "index.html";
			},1000);
			
		})
	})
})