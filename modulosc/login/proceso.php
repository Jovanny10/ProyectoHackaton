<?php  

      /**
       * 
       */
      class proceso
      {
      	
      	public function validar()
      	{
      		if ($_SERVER["REQUEST_METHOD"] == "POST"){
      			if(empty($_POST['email']) and empty($_POST['password'])){
      				?>
      				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
		   			<strong>Rellenar los campos Usuario y Contraseña !</strong>
		   			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
		   				<span aria-hidden = "true">&times;</span>
		   			</button>
   		            </div>
      				<?php
      			}else
      			if(empty($_POST["email"])){
      				?>
      				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
		   			<strong>Rellenar el campo usuario !</strong>
		   			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
		   				<span aria-hidden = "true">&times;</span>
		   			</button>
   		            </div>
      				<?php
      			}else
      			if(empty($_POST["password"])){
      				?>
      				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
		   			<strong>Rellenar el campo password !</strong>
		   			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
		   				<span aria-hidden = "true">&times;</span>
		   			</button>
   		            </div>
      				<?php
      			}else
      			if(isset($_POST['email']) and isset($_POST['password'])){
      				$usuario = $_POST['email'];
      				$Contraseña = md5($_POST['password']);
      				$this->busqueda($usuario,$Contraseña);
      			}
      		}
      	}

      	function busqueda($email,$contra){
	      		    require_once '../../classm/config/conexion.php';
	      		    $cone = new Conexion();
	      		    $contenido = $cone->query("SELECT `Nombre`,`Apellidos`,`E-mail`,`Celular`,`Rol_idRol` FROM `comunidad` WHERE `E-mail`='$email' and `psw` = '$contra'");
      		    if($contenido->num_rows >0){
      		    	while($row = mysqli_fetch_array($contenido)){
      		    	    $nombre =  $row['Nombre'];
      		    	    $rol    =  $row['Rol_idRol'];
      		    	    echo $rol;
      		        }

      		    }else{
      		    	?>
      				<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
		   			<strong>Usuario y/o contraseña incorrectos !</strong>
		   			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
		   				<span aria-hidden = "true">&times;</span>
		   			</button>
   		            </div>
      				<?php
      		    }
      		    

      	}
      }

      $visualizar = new proceso();
      $visualizar->validar();
?>