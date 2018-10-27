<?php 
	require_once '../../modulosc/login/security.php';//Clase para verificar session
	verificar_session();/*Es la funcion que tien security para verificar si ya iniciaron session o no para redireccionarlo al index.html*/
	/*require_once '../../modulosc/hacker/perfil.php';
	$controlador = new perfilcontrolador();//Instanciamos el archivo perfil.php de view
	$id = $_SESSION['id'];
	$resultado = $controlador->visualizar($id);//Guardamos lo que retorna el controlador en una variable
	$row = $resultado->fetch_assoc();//Con fetch recorremos para visualizar el resultado*/
	$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi perfil</title>
	<link rel="stylesheet" type="text/css" href="../../css/perfil.css">
</head>
<body>
	 <div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<h3 class="card-header text-center bg-dark text-white">Mi perfil</h3>
				<div class="card-header">
					<div class="text-center">
						<i class="fas fa-user-circle fa-8x"></i>
					</div>

					<div class="form-group">
						<h3 class="text-center"><?php echo $_SESSION['nombre']; ?></h3>
					</div>
					<div class="row">	
						<button class="form-control text-white">Bienvenid@</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row justify-content-center">
				<div class="col-md-10">
				  <form id="formulario_perfil">
					<div class="form-group">
						<h2>Datos personales</h2>
					</div>
					<div class="form-group">
						<label for="#" class="label-control">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" value="" onmousedown="desabilitar();" disabled>
					</div>

					<div class="form-group">
						<label for="#" class="label-control">Apellidos</label>
						<input type="text" class="form-control" id="Apellidos" name="Apellidos" value="" onmousedown = "desabilitar();" disabled>
					</div>

					<div class="form-group">
						<label for="#" class="label-control">E-mail</label>
						<input type="text" class="form-control"  id="Correos" name="Correos" value="" onmousedown = "desabilidar();" disabled>
					</div>

					<div class="form-group">
						<label for="#" class="label-control">Teléfono</label>
						<input type="text" class="form-control" id="cel" name="cel" value="" onmousedown = "desabilitar();" disabled>
					</div>
					<div class="form-group">
						<label for="#" class="label-control">Fecha Nacimiento</label>
						<input type="date" class="form-control" id="nacimiento" name="nacimiento" value="" onmousedown = "desabilitar();" disabled>
					</div>
					 
					<div class="form-group text-right">
						<p class="btn btn-primary" data-toggle = "modal" data-target = "#Editar"><i class="fas fa-edit"></i> Editar</p>
					</div>
				  </form>
				  <div class="modal fade" id="Editar">
				  	<div class="modal-dialog" role = "document">
				  		<div class="modal-content">
				  		 <form method="POST">
				  			<div class="modal-header">
				  				<h2 class="modal-title"><i class="fas fa-edit"></i> Editar </h2>
				  				<button type = "button" class="close" data-dismiss = "modal" aria-label = "Close">
				  					<span aria-hidden = "true" class="text-danger">&times;</span>
				  				</button>
				  			</div>
				  			<div class="modal-body">
				  				<input type="hidden" class="form-control" id = "id" name = "id" value = "<?php echo $id ?>">
				  				<div class="form-group">
				  					<label for="#">Nombre</label>
				  					<input type="text" class="form-control" onkeypress="return sololetras(event)" name = "nombre1" id = "nombre1"  value = "">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">Apellidos</label>
				  					<input type="text" class="form-control" onkeypress="return sololetras(event)" name = "apellidos1" id="apellidos1" value = "">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">E-mail</label>
				  					<input type="text" class="form-control" name = "email1" id = "email1" value = "">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">Teléfono</label>
				  					<input type="text" class="form-control" name = "telefono" id = "telefono" value = "">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">Fecha Nacimiento</label>
				  					<input type="date" class="form-control" name = "fecha1" id = "fecha1" value = "">
				  				</div>
				  				<div class="informacion">
				  			    </div>
				  			</div>
				  			<div class="modal-footer">
				  				<div class="mCerrar btn btn-default" data-dismiss = "modal">Cerrar</div>
				  				<button class="mGuardar btn btn-primary" name="submit" id="Aceptar" type="submit">Guardar</button>
				  			</div>
				  		    </form>	
				  		</div>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		 function sololetras(e) {
		      key = e.keyCode || e.which;
		      teclado = String.fromCharCode(key).toLowerCase();
		      letras = "abcdefghijklmnñopqrstuvwxyzáéíóú ";
		      especiales = "8-9-32-37-38-46-164";
		      teclado_especial = false;
		      for (var i in especiales) {
		          if (key == especiales[i]) {
		              teclado_especial = true;
		              break;
		          }
		      }
		      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
		          return false;
		      }
         }
	</script>
	<script type="text/javascript" src="../../modulosc/hacker/visualizar.js"></script>
	<script type="text/javascript" src="../../modulosc/hacker/Editarperfil.js"></script>
</body>
</html>
