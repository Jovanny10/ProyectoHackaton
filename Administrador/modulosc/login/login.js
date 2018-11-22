$(function(){
	$('form').submit(function(e){
		var data = $(this).serialize();
		e.preventDefault();
		$.ajax({
			url:'modulosc/login/proceso.php',
			type:'POST',
			data:data,
			//Para mostrar un icono
			beforeSend:function(){
				//Se carga el icono- y se esconde el always
				$('.fas').css('display','inline');
			}
		})//Cabecera del metodo AJAX, el que se va a ejecutar primero
		.done(function(resp){
			$('.error').html(resp);
		})

		.always(function(){//Se ejecuta siempre, cuando se termina el request, se utiliza cuando hacemos
			//una búsqueda podemos utilizar un icono recargando
			//Antes de que se haga el request se muestra el icono y el always lo esconde
			setTimeout(function(){
				$('.fas').hide();
				location.href = "index.html";
			},1000);

		})
	})
})