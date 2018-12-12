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
	<link rel="stylesheet" href="../../css/style.default.css" id="theme-stylesheet">
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
<!--===============================================================================================-->
</head>
<body>
	<nav class="side-navbar">
		<div class="side-navbar-wrapper">
			<div class="sidenav-header-inner text-center p-3"><div class="fas fa-user-circle fa-3x"></div>
				<h3 class="h3">Miranda</h3><span class="text-danger">Administrador</span>
			</div>
			<div class="sidenav-header-logo">
				<a href="index.php" class="brand-small text-center"><strong><i class="fas fa-home"></i></strong></a>
			</div>
		</div>
		<div class="main-menu">
			<h5 class="sidenav-heading">MENÚ</h5>
			<li>
				<a href="#" aria-expanded = "false">
					<i class="fas fa-user-tie"></i>Perfil
				</a>
			</li>
			<li>
            	<a href="#" aria-expanded = "false">
            		<i class="fas fa-book-open"></i>Catálogo proyectos
            	</a>
            </li>
            <li>
            	<a href="#" aria-expanded = "false">
            		<i class="fas fa-mail-bulk"></i>Solicitud Juez
            	</a>
            </li>
            <h5 class="sidenav-heading">CONSULTAS</h5>
			<li><a href="#Monitoreo" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-search"></i>Participantes</a>
              <ul id="Monitoreo" class="collapse list-unstyled ">
              	  <li><a href="#">Hackers</a></li>
              	  <li><a href="#">Lider de Proyecto</a></li>
              	  <li><a href="#">Juez / Mentor</a></li>            
              </ul>
            </li>
            <h5 class="sidenav-heading">REGISTROS</h5>
            <li><a href="#Registros" aria-expanded = "false" data-toggle = "collapse"><i class="fas fa-file-signature"></i>Registros</a>
              <ul id="Registros" class="collapse list-unstyled">
              	  <li><a href="#">Hackaton</a></li>
              	  <li><a href="#">Vertical</a></li>
              	  <li><a href="#">Rúbricas</a></li>
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
							<a href="#" id="toggle-btn" class="menu-btn">
								<i class="fas fa-bars"></i>
							</a>
						</div>
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<li class="nav-item">
								<a href="#" class="nav-link logout" data-toggle = "modal" data-target = "#cerrar">
									<span class="fas fa-power-off text-danger"></span>
									Salir
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>
</body>
</html>