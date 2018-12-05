<?php 
	require_once '../../modulosc/login/security.php';//Clase para verificar session
	verificar_session();/*Es la función que tiene security para verificar si ya iniciaron session o no para redireccionarlo al index.html*/
	$id = $_SESSION['id'];//Traemos el id de la persona en este caso el lider del proyecto
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi perfil</title>
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
							<p class="btn btn-primary" data-toggle = "modal" data-target="#Editar"><i class="fas fa-edit"></i> Editar</p>
						</div>
					</form>

				</div>
				
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../../modulosc/hacker/visualizar.js"></script>
</body>
</html>