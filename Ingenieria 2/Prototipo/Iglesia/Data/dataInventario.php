<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class dataInventario{

	function dataInventario(){
	}

	function insertarInventario($inventario){	
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "INSERT INTO tbinventario VALUES ('".$inventario->getSerieInventario()."','".$inventario->getNombreInventario()."','".$inventario->getModeloInventario()."','".$inventario->getMarcaInventario()."','".$inventario->getEstadoInventario()."','".$inventario->getCantidadInventario()."','".$inventario->getDescripcionInventario()."')";
			
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		
	}
	function getInventarios(){
		$con = new DBConexion;
		// se declara una lista enlazada
		$lista = array();
		
		if($con->conectar()==true){
		
			$query = "SELECT * FROM tbinventario";
			$result = @mysql_query($query);
			
			while($row = mysql_fetch_array($result)){
	 			$inventario = new Inventario($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[0]);

				array_push($lista, $inventario);
			}
			if (!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

	function eliminarInventario($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			
			$query = "DELETE FROM tbinventario WHERE serie=".$id;
			//echo $query;
			//echo "-";
			$result = @mysql_query($query);	
						
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}

	function getInventario($id){
		$con = new DBConexion;
		// se declara una lista enlazada
		$inventario;
		
		if($con->conectar()==true){
		
			$query = "SELECT * FROM tbinventario WHERE serie = ".$id;
			$result = @mysql_query($query);
			//echo "-";
			//echo $id;
			//echo "-";
			
			if($row = mysql_fetch_array($result)){
	 			$inventario = new Inventario($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[0]);	
			}
			if (!$inventario){
				return false;
			}else{
				return $inventario;
			}
		}
	}

	function modificarInventario($inventario, $serieInventario){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "UPDATE tbinventario SET 
			nombre='".$inventario->getNombreInventario()."', 
			modelo='".$inventario->getModeloInventario()."', 
			marca='".$inventario->getMarcaInventario()."',	
			estado='".$inventario->getEstadoInventario()."', 
			cantidad='".$inventario->getCantidadInventario()."', 
			descripcion='".$inventario->getDescripcionInventario()."'
			WHERE serie =".$serieInventario."";

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