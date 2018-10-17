<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hacker</title>
<!--===============================================================================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--===============================================================================================-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<script type="text/javascript" src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <!--Custon Scrollbar-->
    <link rel="stylesheet" type="text/css" href="../../librerias/malihu/jquery.mCustomScrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/style.default.css" id="theme-stylesheet">
<!--===============================================================================================-->
    <!--Font awesome CSS-->
    <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/brands.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/solid.css">
<!--===============================================================================================-->
    <script type="text/javascript" src="../../librerias/popper/popper.min.js"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="../../librerias/jquery/jquery-3.3.1.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	<nav class="side-navbar">
		<div class="side-navbar-wrapper">
			<div class="sidenav-header-inner text-center p-3"><div class="fas fa-user-circle fa-3x"></div>
			    <h3 class="h3">Jovanny</h3><span class="text-danger">Hacker</span>	
			</div>
			<div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong><i class="fas fa-home"></i></strong></a></div>
		</div>
		<div class="main-menu">
			<h5 class="sidenav-heading">Menú</h5>
			<ul id="side-main-menu" class="side-menu list-unstyled">
				<li>
					<a href="index.php?carga = 1" aria-expanded = "false"><i class="fas fa-user-cog"></i>Mi perfil</a>
				</li>
				<h5 class="sidenav-heading">PROYECTOS</h5>
				<li>
					<a href="index.php?carga = 2" aria-expanded = "false"><i class="fas fa-folder-open"></i>Estado del proyecto</a>
				</li>
				<li>
					<a href="index.php?cargar=4" aria-expanded="false"><i class="fas fa-bell"></i> Solicitudes <h5 style="display: inline;"><span class="badge badge-pill badge-danger">8</span></h5></a>
				</li>
			</ul>
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
							<li class="nav-item"><a href="../iniciosesion/cerrarsesion.php" class="nav-link logout"> <span class="fas fa-power-off text-danger"></span> Salir</a></li><!--Se utiliza para salir del sistema-->	
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<section class="dashboard-counts section-padding">
			<div class="container-fluid">
				<div class="right_col" role="main">
					<div class="row justify-content-center" id="bienvenido">
						<div class="col-md-10">
							<div class="jumbotron jumbotron-fluid">
								<div class="container">
									<h1 class="display-4 text-center">Bienvenid@ Miranda</h1>
									<p class="lead">
										Esta es tu portada principal, en donde podrás visualizar tu perfil, registro de proyecto, estado del proyecto donde podrás ver los integrantes de tu equipo, participa y gana!!!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="main-footer">
			<div class="conainer-fluid">
				<div class="row">
					<div class="col-sm-10">
						<p>La gente positiva cambia el mundo, mientras que la negativa lo mantiene como está –Alan Key</p>
					</div>
					<div class="col-sm-2 text-right">
						<p>Equipo Mundo virtual</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script type="text/javascript" src="../../librerias/malihu/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="../../librerias/front.js"></script><!--Nos permite ocultar el navbar-->
</body>
</html>