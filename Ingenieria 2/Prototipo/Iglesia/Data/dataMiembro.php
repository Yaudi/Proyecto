<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class dataMiembro{

	function dataMiembro(){
	}

	function insertarMiembro($miembro){	
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "INSERT INTO tbmiembro (cedula,nombre,apellidos,edad,lugarProcedencia,telefono,estadoCivil,nivelTeologico,clasificacion,tipo,idcelula) VALUES ('".$miembro->getCedulaMiembro()."','".$miembro->getNombreMiembro()."','".$miembro->getApellidosMiembro()."','".$miembro->getAnioNacimientoMiembro()."','".$miembro->getProcedenciaMiembro()."','".$miembro->getTelefonoMiembro()."','".$miembro->getEstadoCivilMiembro()."','".$miembro->getNivelTeologicoMiembro()."','".$miembro->getClasificacionMiembro()."','".$miembro->getTipoMiembro()."','".$miembro->getIdCelula()."')";
			
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}

	function getMiembros(){
		$con = new DBConexion;
		// se declara una lista enlazada
		$lista = array();
		
		if($con->conectar()==true){
			$query = "SELECT * FROM tbmiembro";
			$result = @mysql_query($query);
			
			while($row = mysql_fetch_array($result)){
	 			$miembro = new Miembro($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
				array_push($lista, $miembro);
			}
			if (!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

	function getMiembro($id){
		$con = new DBConexion;
		// se declara una lista enlazada
		$miembro;
		
		if($con->conectar()==true){
		
			$query = "SELECT * FROM tbmiembro WHERE cedula = ".$id;
			$result = @mysql_query($query);
			
			if($row = mysql_fetch_array($result)){
	 			$miembro = new Miembro($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);	
			}
			if (!$miembro){
				return false;
			}else{
				return $miembro;
			}
		}
	}


	function modificarMiembro($miembro, $cedula){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "UPDATE tbmiembro SET 
			nombre='".$miembro->getNombreMiembro()."', 
			apellidos='".$miembro->getApellidosMiembro()."', 
			edad='".$miembro->getAnioNacimientoMiembro()."',	
			lugarProcedencia='".$miembro->getProcedenciaMiembro()."', 
			telefono='".$miembro->getTelefonoMiembro()."', 
			estadoCivil='".$miembro->getEstadoCivilMiembro()."', 
			nivelTeologico='".$miembro->getNivelTeologicoMiembro()."',	
			clasificacion='".$miembro->getClasificacionMiembro()."', 
			tipo='".$miembro->getTipoMiembro()."',	
			idcelula=".$miembro->getIdCelula()."
			WHERE cedula =".$cedula."";

			$result = @mysql_query($query);	

			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}

	function eliminarMiembro($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			
			$query = "DELETE FROM tbmiembro WHERE cedula=".$id;		
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