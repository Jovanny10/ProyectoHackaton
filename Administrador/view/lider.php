<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lider</title>
</head>
<body>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="text-center h1">Líderes</div>
			<table id="lider" class="table table-hover table-responsive-sm">
				<thead class="thead-light">
					<tr>
						<th class="text-white" style="background-color: #061a45">#</th>
						<th class="text-white" style="background-color: #061a45">Nombre</th>
						<th class="text-white" style="background-color: #061a45">Email</th>
						<th class="text-white" style="background-color: #061a45">Celular</th>
						<th class="text-white text-center" style="background-color: #061a45">Detalles</th>
						<th class="text-white" style="background-color: #061a45">Acciones</th>
					</tr>
				</thead>
				<tbody class="text-dark">
				</tbody>
			</table>
		</div>
<!--==========================================MODAL DETALLES================================================-->
		<div class="modal fade" id="detalleslider">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<form method="POST">
						<div class="modal-header">
							<h2 class="modal-title"><i class="fas fa-edit"></i> Detalles</h2>
							<button type="button" class="close" data-dismiss = "modal" aria-label = "Close">
								<span aria-hidden = "true" class = "text-danger">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<input type="hidden" class="form-control" id="id" name="id" value="">
							<div class="row">
								<div class="col-lg-12">
									<label for="#">Institución</label>
									<input type="text" id="institucion" class="form-control" name="institucion" disabled="">
									</input>
								</div>
								<div class="col-lg-12">
									<label for="#">Carrera</label>
									<input id="carrera" class="form-control" name="carrera" disabled="">
									</input>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label for="#">Habilidad</label>
									<input type="text" class="form-control" name="habilidad1" id="habilidad1" disabled="">
								</div>
								<div class="col-lg-12">
									<label for="#">Hobbie</label>
									<input type="text" class="form-control" name="hobbie1" id="hobbie1" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)" disabled="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label for="#">Facebook</label>
									<input type="text" class="form-control" name="facebook" id="facebook" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)" disabled="">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<label for="#">F-Nacimiento</label>
									<input type="text" class="form-control text-center" name="fecha1" id="fecha1" disabled="">
								</div>
								<div class="col-lg-6">
									<label for="#">Sexo</label>
									<input id="sexo" name="sexo" class="form-control text-center" disabled="">
									</input>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="mCerrar btn btn-primary rounded" data-dismiss = "modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
<!--==========================================FIN MODAL DETALLES================================================-->
<!--==========================================MODAL EDITAR================================================-->
		<div class="modal fade" id="editar">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<form method="POST">
						<div class="modal-header">
							<h2 class="modal-title"><i class="fas fa-edit"></i> Editar</h2>
							<button type="button" class="close" data-dismiss = "modal" aria-label = "Close">
								<span aria-hidden = "true" class = "text-danger">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<input type="hidden" class="form-control" id="id" name="id" value="">
							<div class="row">
								<div class="col-lg-4">
									<label for="#">Nombre</label>
									<input type="text" class="form-control" name="nombre1" id="nombre1" onpaste= "alert('No puedes pegar');return false">
								</div>
								<div class="col-lg-4">
									<label for="#">Apellido paterno</label>
									<input type="text" class="form-control" name="App" id="App">
								</div>
								<div class="col-lg-4">
									<label for="#">Apellido materno</label>
									<input type="text" class="form-control" name="Apm" id="Apm">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<label for="#">E-mail</label>
									<input type="text" class="form-control" name="email1" id="email1" onpaste="alert('No puedes pegar');return false">
								</div>
								<div class="col-lg-4">
									<label for="#">Celular</label>
									<input type="text" class="form-control" name="telefono1" id="telefono1" onpaste="alert('No puedes pegar');return false">
								</div>
								<div class="col-lg-4">
									<label for="#">F-Nacimiento</label>
									<input type="text" class="form-control" name="fecha1" id="fecha1">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<label for="#">Institución</label>
									<select id="institucion" class="form-control" name="institucion">
									</select>
								</div>
								<div class="col-lg-4">
									<label for="#">Carrera</label>
									<select id="carrera" class="form-control" name="carrera">
										
									</select>
								</div>
								<div class="col-lg-4">
									<label for="#">Sexo</label>
									<select id="sexo" name="sexo" class="form-control">
										
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<label for="#">Facebook</label>
									<input type="text" class="form-control" name="facebook" id="facebook" onpaste="alert('No puedes pegar');return false" onkeypress="return sololetras(event)">
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
								<div class="row justify-content-center">
									<div class="col-mg-5">
										<div class="informacion">
											
										</div>
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
<!--==========================================MODAL ELIMINAR================================================-->
		<div class="modal fade" id="eliminar">
			<div class="modal-dialog" role = "document">
				<div class="modal-content text-center text-danger">
					<div class="modal-body">
						<i class="fas fa-times-circle fa-5x"></i>
						<h1 class="modal-title text-center text-dark" id="cerrar">Estas seguro ?</h1>
						<p class="text-center text-dark">Quiere eliminar el hacker del sistema</p>
						<a href="#" class="btn btn-primary">si, Aceptar</a>
						<a href="#" class="btn btn-danger text-white" data-dismiss = "modal">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
<!--==========================================FIN MODAL ELIMINAR================================================-->	
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
	<script type="text/javascript" src="../modulosc/lider/tablalider.js"></script>
</body>
</html>