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
      				 echo "Rellenar los campos Usuario y Contraseña !";
      			}else
      			if(empty($_POST["email"])){
                  echo "Rellenar el campo usuario !";
      			}else
      			if(empty($_POST["password"])){
                  echo "Rellenar el campo password !";
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
	      		    $contenido = $cone->query("SELECT `id`,`Nombre`,`Apellidos`,`mail`,`Celular`,`Rol_idRol` FROM `comunidad` WHERE `mail`='$email' and `psw` = '$contra'");
      		    if($contenido->num_rows >0){
      		    	while($row = mysqli_fetch_array($contenido)){
                     session_start();
                     $_SESSION['activo'] = true;
                     $_SESSION['id'] = $row['id'];
                     $_SESSION['nombre'] = $row['Nombre'];
                     $rol = $row['Rol_idRol'];
      		    	   echo $rol;

      		        }

      		    }else{
      		    	 echo "Usuario y/o contraseña incorrectos !";
      		    }
      		    

      	}
      }

      $visualizar = new proceso();
      $visualizar->validar();
?>