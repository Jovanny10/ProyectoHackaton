<?php 
	require_once '../modulosc/login/security.php';/*Clase para verificar session*/
	verificar_session();/*Es la funcion que tiene security para verificar si ya iniciaron session o no para redireccionarlo 
	al index*/
	$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi Perfil</title>
	<link rel="stylesheet" href="../../css/perfil.css">
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
						<h3 class="text-center"><?php echo $_SESSION['nombre'];?></h3>
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
							<input type="text" class="form-control" name="nombre" id="nombre" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Apellidos</label>
							<input type="text" class="form-control" id="Apellidos" name="Apellidos" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">E-mail</label>
							<input type="text" class="form-control" id="Correo" name="Correo" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Teléfono</label>
							<input type="text" class="form-control" id="cel" name="cel" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group text-right">
							<p class="btn btn-primary" data-toggle = "modal" data-target = "#Editar"><i class="fas fa-ellipsis-h"></i> Detalles</p>
						</div>
					</form>
<!--===================================EDITAR============================================================-->
					<div class="modal fade" id="Editar">
						<div class="modal-dialog modal-lg" role = "document">
							<div class="modal-content">
								<form method="POST">
									<div class="modal-header">
										<h2 class="modal-title"><i class="fas fa-edit"></i> Editar</h2>
										<button type="button" class="close" data-dismiss = "modal" aria-label = "Close">
											<span aria-hidden = "true" class = "text-danger">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $id; ?>" >
										<div class="row">
											<div class="col-lg-4">
												<label for="#">Nombre</label>
												<input type="text" class="form-control" name="nombre1" id="nombre1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Apellido paterno</label>
												<input type="text" class="form-control" name="App1" id="App1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Apellido materno</label>
												<input type="text" class="form-control" name="Apm1" id="Apm1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="#">E-mail</label>
												<input type="text" class="form-control" name="email1" id="email1" onpaste="alert('No puedes pegar');return false">
											</div>
											<div class="col-lg-4">
												<label for="#">Celular</label>
												<input type="text" class="form-control" name="telefono1" id="telefono1" onpaste = "alert('No puedes pegar');return false" onkeypress="return solonumeros(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Psw</label>
												<input type="text" class="form-control" name="psw" id="psw" onpaste = "alert('No puedes pegar');return false" onkeypress="return contraseña(event);">
											</div>
										</div>
										<div class="row justify-content-center m-3">
											<div class="col-mg-5">
												<div class="informacion">
													
												</div>
											</div>
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
<!--======================================FIN EDITAR=========================================================-->
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

        function contraseña(e) {
		      key = e.keyCode || e.which;
		      teclado = String.fromCharCode(key).toLowerCase();
		      letras = "abcdefghijklmnñopqrstuvwxyz1234567890._-@";
		      especiales = "9-32-37-38-46-164";
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

        function solonumeros(e) {
		      key = e.keyCode || e.which;
		      teclado = String.fromCharCode(key);
		      numero = "0123456789";
		      especiales = "8-37-38-46-27";
		      teclado_especial = false;
		      for (var i in especiales) {
		          if (key == especiales[i]) {
		              teclado_especial = true;
		          }
		      }
		      if (numero.indexOf(teclado) == -1 && !teclado_especial) {
		          return false;
		      }
       }
	</script>
	<script type="text/javascript" src="../modulosc/perfil/visualizarAdministrador.js"></script>
	<script type="text/javascript" src="../modulosc/perfil/EditarAdmin.js"></script>
</body>
</html>