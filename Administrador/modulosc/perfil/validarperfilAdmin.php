<?php 
	if(!empty($_POST)){
		if(empty($_POST['nombre1']) || is_numeric($_POST['nombre1'])){
			?>
				<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       <strong> Ingresa un nombre valido</strong>
                 </div>
			<?php
		}else
		if(empty($_POST['App1']) || is_numeric($_POST['App1'])){
			?>
				<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       <strong> Apellido paterno invalido</strong>
                 </div>
			<?php
		}else
		if()
	}

?>