<?php
header('Content-Type: text/html; charset=ISO-8859-1');

include ("DBConexion.php");

class DataPuesto{
	function DataPuesto(){
	}

	function insertar($puesto){
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "INSERT INTO tbpuesto (puesto) VALUES ('".$puesto->get_nombrePuesto()."')";
			
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}


	function getPustos(){
		$con = new DBConexion;
		// se declara una lista enlazada
		$lista = new SplDoublyLinkedList();
		
		if($con->conectar()==true){
			$query = "SELECT * FROM tbpuesto";
			
			$result = @mysql_query($query);
			
			while($row = mysql_fetch_array($result)){
			
			$puesto = new Puesto;
			
			$puesto->set_idPuesto($row['id']);
			
			$puesto->set_nombrePuesto($row['puesto']);
			// push equivale a insertar al final de la lista			
			$lista->push($puesto);
			}
			if (!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}
	
		function getPusto($idPuesto){
	
		$con = new DBConexion;
		$lista = new SplDoublyLinkedList();
		
		if($con->conectar()==true){
		
			$puesto = new Puesto;
			
			$query = "SELECT * FROM tbpuesto WHERE id=$idPuesto";
			
			$result = @mysql_query($query);
			
			while($row = mysql_fetch_array($result)){
			
			$puesto->set_idPuesto($row['id']);
			
			$puesto->set_nombrePuesto($row['puesto']);
						
			$lista->push($puesto);
			}
			if (!$puesto){
				return false;
			}else{
				return $lista;
			}
		}
	}
	
		function eliminar($puesto){
	
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "DELETE FROM tbpuesto WHERE id=".$puesto->get_idPuesto()."";
			
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($puesto){
	
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "UPDATE tbpuesto SET puesto='".$puesto->get_nombrePuesto()."' WHERE id=".$puesto->get_idPuesto()."";
			
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
}


?>