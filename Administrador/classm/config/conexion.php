<?php 
     /**
      * 
      */
     class Conexion extends mysqli
     {
     	private $HOST = "localhost";
     	private $USER = "root";
     	private $PASS = "";
     	private $BASE = "hackaton1";
     	public  $conexion;

     	function __construct()
     	{
     		$this->conexion = parent::__construct($this->HOST,$this->USER,$this->PASS,$this->BASE);
     	}
     }
     

?>
