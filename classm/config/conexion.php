<?php 
   /**
    * 
    */
   class Conexion extends mysqli
   {
	   	
	    private $HOST = "localhost";
	    private $USER = "root";
	    private $PASS = "";
	    private $BASE = "inovahack";
	   	
	   	function __construct()
	   	{
	   		 parent::__construct($this->HOST, $this->USER, $this->PASS, $this->BASE);
	   	}
	   	function cerrar(){
	   		$this->conexion->close();
	   	}


   }

?>