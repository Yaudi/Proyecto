<?php
class DBConexion{
  	var $conect;
  
    function DBConexion(){
	}
	 
	function getCon(){
	 	return $this->conect;
	}

	function conectar() {
		if(!($con=@mysql_connect("localhost","root",""))){
			echo"Error al conectar a la base de datos";
		 	exit();
		}
		if (!@mysql_select_db("bdiglesia",$con)) {
		    echo "Error al seleccionar la base de datos";
			exit();
		}
		$this->conect=$con;
		return true;
	}
}
?>