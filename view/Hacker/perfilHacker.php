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
<!--==========================================FORMULARIO PERFIL================================================-->
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
							<input type="text" class="form-control" id="Correos" name="Correos" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Teléfono</label>
							<input type="text" class="form-control" id="cel" name="cel" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Fecha Nacimiento</label>
							<input type="text" class="form-control" id="nacimiento" name="nacimiento" value="" onmousedown="desabilitar();" disabled="">
						</div>
						<div class="form-group text-right">
							<p class="btn btn-primary" data-toggle = "modal" data-target="#Editar"><i class="fas fa-ellipsis-h"></i> Detalles</p>
						</div>
					</form>
<!--==========================================FIN FORMULARIO PERFIL================================================-->
<!--==========================================MODAL EDITAR================================================-->
					<div class="modal fade" id="Editar">
						<div class="modal-dialog modal-lg" role = document>
							<div class="modal-content">
								<form method="POST">
									<div class="modal-header">
										<h2 class="modal-title"><i class="fas fa-edit"></i> Editar</h2>
										<button type="button" class="close" data-dismiss = "modal" aria-label = "Close">
											<span aria-hidden = "true" class = "text-danger">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id ?>">
										<div class="row">
											<div class="col-lg-4">
												<label for="#">Nombre</label>
												<input type="text" class="form-control" name="nombre1" id="nombre1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Apellido paterno</label>
												<input type="text" class="form-control" name="App1" id="App1">
											</div>
											<div class="col-lg-4">
												<label for="#">Apellido materno</label>
												<input type="text" class="form-control" name="Apm1" id="Apm1">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="#">E-mail</label>
												<input type="text" class="form-control" name="email1" id="email1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Celular</label>
												<input type="text" class="form-control" name="telefono1" id="telefono1" onpaste = "alert('No puedes pegar');return false">
											</div>
											<div class="col-lg-4">
												<label for="#">F-Nacimiento</label>
												<input type="date" class="form-control" name="fecha1" id="fecha1">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="#">Institución</label>
												<select id="institucion" class="form-control" name="institucion">
													<?php 
														include_once '../../classm/config/conexion.php';
														$conexion  = new Conexion();
														$sql = "SELECT * FROM `institucion`";
														$resultado = $conexion->query($sql);
														while($row = mysqli_fetch_array($resultado)){
															?>
														 	<option value="<?php echo $row['institucion']; ?>" selected id=institucion><?php echo utf8_encode($row['Institucion']); ?></option>
															<?php
														}
													?>
												</select>
											</div>
											<div class="col-lg-4">
												<label for="#">Carrera</label>
												<select id="carrera" class="form-control" name="carrera">
													<?php 
														include_once '../../classm/config/conexion.php';
														$conexion = new Conexion();
														$sql = "SELECT * FROM `carrera`";
														$resultado = $conexion->query($sql);
														while($row = mysqli_fetch_array($resultado)){
															?>
															<option value="<?php echo $row['idCarrera'];?>"><?php echo utf8_encode($row['Carrera']); ?></option>
															<?php
														}

													?>
												</select>
											</div>
											<div class="col-lg-4">
												<label for="#">Sexo</label>
												<select id="sexo" name="sexo" class="form-control">
													<?php 
														include_once '../../classm/config/conexion.php';
														$conexion = new Conexion();
														$sql = "SELECT * FROM `sexo`";
														$resultado = $conexion->query($sql);
														while($row = mysqli_fetch_array($resultado)){
															?>
															<option value="<?php echo $row['idSexo']; ?>"><?php echo utf8_encode($row['Sexo']); ?></option>
															<?php
														}


													?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="#">Facebook</label>
												<input type="text" class="form-control" name="facebook" id="facebook1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Twitter</label>
												<input type="text" class="form-control" name="twitter1" id="twitter1" onpaste = "alert('No puedes pegar');return false">
											</div>
											<div class="col-lg-4">
												<label for="#">Habilidad</label>
												<input type="text" class="form-control" name="habilidad1" id="habilidad1">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="#">Hobbie</label>
												<input type="text" class="form-control" name="hobbie1" id="hobbie1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
											</div>
											<div class="col-lg-4">
												<label for="#">Playera</label>
												<select id="playera" name="playera" class="form-control">
													<option selected="" value="0"> -- Seleccionar -- </option>
												</select>
											</div>
											<div class="col-lg-4">
												<label for="#">Rol</label>
												<select id="rol" name="rol" class="form-control">
													<option selected="" value="0"> -- Seleccionar -- </option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<label for="#">Psw</label>
												<input type="text" class="form-control" name="psw1" id="psw1">
											</div>
										</div>
										<div class="row justify-content-center">
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
<!--==========================================FIN MODAL EDITAR================================================-->
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
