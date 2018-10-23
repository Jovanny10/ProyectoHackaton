<?php 
	require_once '../../modulosc/login/security.php';//Clase para verificar session
	verificar_session();/*Es la funcion que tien security para verificar si ya iniciaron session o no para redireccionarlo al index.html*/
	require_once '../../modulosc/hacker/perfil.php';
	$controlador = new perfilcontrolador();//Instanciamos el archivo perfil.php de view
	$id = $_SESSION['id'];
	$resultado = $controlador->visualizar($id);//Guardamos lo que retorna el controlador en una variable
	$row = $resultado->fetch_assoc();//Con fetch recorremos para visualizar el resultado
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
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['Nombre']; ?>" >
					</div>

					<div class="form-group">
						<label for="#" class="label-control">Apellidos</label>
							<input type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?php echo $row['Apellidos']; ?>">


					</div>

					<div class="form-group">
						<label for="#" class="label-control">E-mail</label>
						<input type="text" class="form-control"  id="Correos" name="Correos" value="<?php echo $row['E-mail']; ?>" >
					</div>

					<div class="form-group">
						<label for="#" class="label-control">Teléfono</label>
						<input type="text" class="form-control" id="cel" name="cel" value="<?php echo $row['Celular']; ?>" >
					</div>
					<div class="form-group">
						<label for="#" class="label-control">Fecha Nacimiento</label>
						<input type="date" class="form-control" id="nacimiento" name="nacimiento" value="<?php echo $row['FechaNacimiento']; ?>">
					</div>
					<div class="form-group text-right">
						<p class="btn btn-primary" data-toggle = "modal" data-target = "#Editar"><i class="fas fa-edit"></i> Editar</p>
					</div>
				  </form>
				  <div class="modal fade" id="Editar">
				  	<div class="modal-dialog" role = "document">
				  		<div class="modal-content">
				  			<div class="modal-header">
				  				<h1 class="modal-title"><i class="fas fa-edit"></i> Editar </h1>
				  				<button type = "button" class="close" data-dismiss = "modal" aria-label = "Close">
				  					<span aria-hidden = "true" class="text-danger">&times;</span>
				  				</button>
				  			</div>
				  			<div class="modal-body">
				  				<div class="form-group">
				  					<label for="#">Nombre</label>
				  					<input type="text" class="form-control">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">Apellidos</label>
				  					<input type="text" class="form-control">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">E-mail</label>
				  					<input type="text" class="form-control">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">Teléfono</label>
				  					<input type="text" class="form-control">
				  				</div>
				  				<div class="form-group">
				  					<label for="#">Fecha Nacimiento</label>
				  					<input type="text" class="form-control">
				  				</div>
				  			</div>
				  			<div class="modal-footer">
				  				<div class="mCerrar btn btn-default" data-dismiss = "modal">Cerrar</div>
				  				<div class="mGuardar btn btn-primary">Guardar</div>
				  			</div>
				  		</div>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>