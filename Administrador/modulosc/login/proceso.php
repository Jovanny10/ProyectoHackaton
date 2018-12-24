<?php 
  /**
   * 
   */
  class proceso
  {
  	public function validar()
  	{
  		if($_SERVER["REQUEST_METHOD"] == "POST"){
  			if(empty($_POST['email']) and empty($_POST['password'])){
  				echo "Rellenar los campos Usuario y Contraseña !";
  			}else
  			if(empty($_POST['email'])){
  				echo "Rellenar el campo usuario !";
  			}else
  			if(empty($_POST['password'])){
  				echo "Rellenar el campo password !";
  			}else
  			if(isset($_POST['email']) and isset($_POST['password'])){
  				$usuario = $_POST['email'];
  				$contraseña  = base64_encode($_POST['password']);
  				$this->busqueda($usuario,$contraseña);
  			}
  		}
  	}

  	public function busqueda($email,$contra){
  		require_once '../../classm/config/conexion.php';
  		$conexion = new Conexion();
      $contenido = $conexion->query("SELECT idAdministrador,Nombre FROM `administrador` WHERE correo = '$email' AND pwd = '$contra'");
      if($contenido->num_rows > 0){
        while($row = mysqli_fetch_array($contenido)){
          session_start();
          $_SESSION['activo']  = true;
          $_SESSION['id'] = $row['idAdministrador'];
          $_SESSION['nombre'] = $row['Nombre'];
          echo 1;
        }
      }else{
        echo "No existe en la base de datos";
      }
  	}


  }
  $visualizar = new proceso();
  $visualizar->validar();
?>