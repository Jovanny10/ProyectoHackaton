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
                       <strong> Ingresa apellidos validos</strong>
                 </div>
            <?php
         	}else
         	if(empty($_POST['email1']) || !filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL)){ //Validar que un correo tenga @ y .
         	   ?>
                 <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong> Ingresa un correo electronico valido</strong>
                 </div>
             <?php
         	}else
         	if(empty($_POST['telefono']) || !is_numeric($_POST['telefono'])){ //Validar que ingresen numeros
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
             		 require_once '../../classm/hacker.php';
    				     $guardar = new hacker();
          			 $id = $_POST['id'];
          			 $nombre = $_POST['nombre1'];
          			 $apellidos = $_POST['apellidos1'];
          			 $email = $_POST['email1'];
          			 $telefono =$_POST['telefono'];
          			 $fecha = $_POST['fecha1'];
          			 $resultado = $guardar->EditarPerfil($id,$nombre,$apellidos,$email,$telefono,$fecha);
      					 if($resultado){
        						  ?>
                         <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                               <strong> Actualizado Correctamente</strong>
                         </div>
        	            <?php
      					 }
         	}


      }

?>