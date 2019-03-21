<?php 
	require_once '../modulosc/login/security.php';//Clase para verificar si está iniciada la session o no
	verificar_session();//Es una funcion de la clase security para verificar si ya iniciaron session o no para redireccionarlo al index
	require_once '../modulosc/paginas.php';/*Nos permite utilizar un switch para redireccionar páginas*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
<!--===============================================================================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--===============================================================================================-->
	<meta name="viewport" content="width = device-width, initial-scale =1">
<!--===============================================================================================-->
	<script type="text/javascript" src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<!--Custon Scrollbar-->
	<link rel="stylesheet" href="../../librerias/malihu/jquery.mCustomScrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="../../css/style.Administrador.css" id="theme-stylesheet">
<!--===============================================================================================-->
	<!--Font awesome CSS-->
	<link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../../librerias/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="../../librerias/fontawesome/css/brands.css">
	<link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/solid.css">
<!--===============================================================================================-->
	<script type="text/javascript" src="../../librerias/popper/popper.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../../librerias/jquery/jquery-3.3.1.min.js"></script>
<!--===============================================================================================-->
	<!--Librería para hacer funcionar la ventana modal-->
	<script type="text/javascript" src="../../librerias/bootstrap.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css"><!--Nos permite tener un estilo en todos los navegadores-->
<!--========================================================================= ======================-->
	<!--Librería de datatable-->
	<link rel="stylesheet" href="../../librerias/datatable/datatables.min.css">
	<script type="text/javascript" src="../../librerias/datatable/datatables.js"></script>
<!--========================================================================= ======================-->
<!--========================================================================= ======================-->


</head>
<body>
	<nav class="side-navbar">
		<div class="side-navbar-wrapper">
			<div class="sidenav-header-inner text-center p-3"><div class="fas fa-user-circle fa-3x"></div>
				<h3 class="h3"><?php echo $_SESSION['nombre']; ?></h3><span class="text-danger">Administrador</span>
			</div>
			<div class="sidenav-header-logo">
				<a href="index.php" class="brand-small text-center"><strong><i class="fas fa-home"></i></strong></a>
			</div>
		</div>
		<div class="main-menu">
			<h5 class="sidenav-heading">MENÚ</h5>
			<li>
				<a href="index.php?carga=1" aria-expanded = "false">
					<i class="fas fa-user-tie"></i>Perfil
				</a>
			</li>
			<li>
            	<a href="index.php?carga=2" aria-expanded = "false">
            		<i class="fas fa-book-open"></i>Catálogo proyectos
            	</a>
            </li>
            <li>
				<a href="index.php?carga=3" aria-expanded="false"><i class="fas fa-bell"></i> Solicitud Juez <h5 style="display: inline;"><span class="badge badge-pill badge-danger">8</span></h5></a>
			</li>
            <h5 class="sidenav-heading">CONSULTAS</h5>
			<li><a href="#Monitoreo" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-search"></i>Participantes</a>
              <ul id="Monitoreo" class="collapse list-unstyled ">
              	  <li><a href="index.php?carga=4">Hackers</a></li>
              	  <li><a href="index.php?carga=5">Lider del Proyecto</a></li>
              	  <li><a href="index.php?carga=6">Juez / Mentor</a></li>            
              </ul>
            </li>
            <h5 class="sidenav-heading">REGISTROS</h5>
            <li><a href="#Registros" aria-expanded = "false" data-toggle = "collapse"><i class="fas fa-file-signature"></i>Registros</a>
              <ul id="Registros" class="collapse list-unstyled">
              	  <li><a href="index.php?carga=7">Hackaton</a></li>
              	  <li><a href="index.php?carga=8">Vertical</a></li>
              	  <li><a href="index.php?carga=9">Rúbricas</a></li>
              </ul>	 
            </li>
            <h5 class="sidenav-heading">EVALUACIÓN</h5>
            
		</div>
	</nav>
	<div class="page">
		<header class="header sticky-top">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-holder d-flex align-items-center justify-content-between">
						<div class="navbar-header">
							<a href="#" id="toggle-btn" class="menu-btn"><!--Aquí se agrega el boton para minimizar-->
								<i class="fas fa-bars"></i>
							</a>
							<img src="../../images/logoinnovahack.png" height="20" width="100" align="center">
						</div>
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<li class="nav-item"><a href="#" class="nav-link logout" data-toggle = "modal" data-target = "#cerrar"><span class="fas fa-power-off text-danger"></span> Salir</a></li><!--Se utiliza para salir del sistema-->	
						</ul>
					</div>
				</div>
			</nav>

		</header>
		<div class="modal fade" id="cerrar">
			<div class="modal-dialog" role = "document">
				<div class="modal-content text-center text-warning">
					<div class="modal-body">
						<i class="fas fa-info-circle fa-5x"></i>
						<h1 class="modal-title text-center text-dark" id="cerrar">Estas seguro ?</h1>
						<p class="text-center text-dark">Quieres salir del sistema y finalizar la sesión actual</p>
						<a class="btn btn-primary" href= "../modulosc/login/cerrarsessionAdministrador.php">si, Salir</a>
						<a class="btn btn-danger text-white" data-dismiss="modal">Cancelar</a>	
					</div>
				</div>
			</div>	
		</div>
		<section class="dashboard-counts section-padding">
			<div class="container-fluid">
				<div class="right_col" role="main">
					<?php 
						if(isset($_GET["carga"])){
							$consulta = $_GET["carga"];
							require_once '../modulosc/paginas.php';
							$principal = new paginas();
							$principal->cargarpaginas($consulta);
						}else{
					?>
					<div class="row justify-content-center" id="bienvenido">
						<div class="col-md-10">
							<div class="jumbotron jumbotron-fluid">
								<div class="container">
									<h1 class="display-4 text-center">Bienvenid@ <?php echo $_SESSION['nombre']; ?></h1>
									<p class="lead">
										Esta es tu portada principal, en donde podrás visualizar tu perfil, registro de proyecto, estado del proyecto donde podrás ver los integrantes de tu equipo, participa y gana!!!
									</p>
								</div>
							</div>
						</div>
					</div>
					<?php 
						}
					?>
				</div>
			</div>
		</section>
		<footer class="main-footer">
			<div class="conainer-fluid">
				<div class="row">
					<div class="col-sm-10">
						<p>El mejor modo de predecir el futuro es inventándolo. –Alan Key</p>
					</div>
					<div class="col-sm-2 text-right">
						<p>Equipo Mundo virtual</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="../../librerias/malihu/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="../../librerias/front.js"></script>
</body>
</html>