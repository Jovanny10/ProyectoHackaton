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
  				$contraseña  = md5($_POST['password']);
  				$this->busqueda($usuario,$contraseña);
  			}
  		}
  	}

  	public function busqueda($email,$contra){
  		require_once '../../classm/config/conexion.php';
  		$cone = new Conexion();
  	}


  }
  $visualizar = new proceso();
  $visualizar->validar();
?>