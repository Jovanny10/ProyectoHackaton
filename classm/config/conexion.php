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
	    public  $conexion;
	   	
	   	function __construct()
	   	{
	   		
	   		$this->conexion =  parent::__construct($this->HOST, $this->USER, $this->PASS, $this->BASE);
	   	}
	 


   }

?>