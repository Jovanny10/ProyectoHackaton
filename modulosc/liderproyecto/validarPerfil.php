<?php 
		if(!empty($_POST)){
			if(empty($_POST['nombre1']) || is_numeric($_POST['nombre1'])){
				?>
                 <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       <strong> Ingresa un nombre valido</strong>
                 </div>
            	<?php	
			}else
			if(empty($_POST['apellidos1'])){
				?>
                 <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       <strong> Ingresa apellidos válidos</strong>
                 </div>
            	<?php
			}else
			if(empty($_POST['email1']) || !filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL)){
				?>
                 <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong> Ingresa un correo electronico valido</strong>
                 </div>
             	<?php
			}else
			if(empty($_POST['telefono']) || !is_numeric($_POST['telefono'])){
				?>
                 <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong> Ingresa un telefono valido</strong>
                 </div>
             	<?php
			}else
			if(empty($_POST['fecha1'])){
				?>
                 <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong> Ingresa una fecha valida</strong>
                 </div>
             	<?php
			}else
			if(isset($_POST['nombre1']) and isset($_POST['apellidos1']) and isset($_POST['email1']) and isset($_POST['telefono']) and isset($_POST['fecha1'])){
				
			}
		}
?>