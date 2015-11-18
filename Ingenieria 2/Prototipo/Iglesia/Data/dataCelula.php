<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class dataCelula{

	function dataCelula(){
	}

	function crearCelula($celula){	
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "INSERT INTO tbcelula (idcelula,nombre,ubicacion) VALUES ('".$celula->getIdCelula()."','".$celula->getNombreCelula()."','".$celula->getUbicacionCelula()."')";
			
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		
	}
	function getCelulas(){
		$con = new DBConexion;
		// se declara una lista enlazada
		$lista = array();
		
		if($con->conectar()==true){
		
			$query = "SELECT * FROM tbcelula";
			$result = @mysql_query($query);
			
			while($row = mysql_fetch_array($result)){
	 			$celula = new Celula($row[0], $row[1], $row[2]);	//aqui creo que tengo que obtener los 3 datos
				array_push($lista, $celula);
			}
			if (!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}
}
?>