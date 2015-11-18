<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	
	include ("../../Data/DBConexion.php");
	include ("../../data/dataMiembro.php");
	include ("../../data/dataCelula.php");
	include ("../../Dominio/Miembro.php");
	include ("../../Dominio/Celula.php");

	class controladoraMiembro{
		
		function controladoraMiembro(){
		}
	
		function insertarMiembro(){
			$cedula = str_replace(" ", "", $_GET['cedula']);

			$nombre = $_GET['nombre'];
			$apellido  = $_GET['apellido'];

			$calendario = $_GET['edad'];
		 	$date = date_create($calendario);
		 	$edad = date_format($date, 'Y-m-d');

			$procedencia= $_GET['procedencia'];

			$telefono = str_replace(" ", "", $_GET['telefono']);
			
			$estadoCivil = $_GET['estadoCivil'];
			$nivelTeologico = $_GET['nivelTeologico'];
			$clasificacion = $_GET['clasificacion'];
			$tipo = $_GET['tipo'];

			$idCelula = $_GET['idCelula'];
			
			$miembro = new Miembro($cedula, $nombre, $apellido, $edad, $procedencia, $telefono, $estadoCivil, $nivelTeologico,$clasificacion, $tipo, $idCelula);
			$dataMiembro = new dataMiembro();
			
			if($dataMiembro->insertarMiembro($miembro)==true){		
				echo "Registro ingresado correctamente<br>";
			}else{
				echo "</p>Error al guardar</p><br>";
			}
		}
		function obtenerMiembros(){
			$data = new dataMiembro;
			$lista =$data->getMiembros();
			if(!$lista){
				return $false;
			}else{
				return $lista;
			}	
		}
		function obtenerMiembro($cedulaMiembro){
			$data = new dataMiembro;
			$miembro =$data->getMiembro($cedulaMiembro);
			if(!$miembro){
				return false;
			}else{
				return $miembro;
			}
		}

		function obtenerCelulas(){
			$dtCelula = new dataCelula;
			$lista =$dtCelula->getCelulas();
			if(!$lista){
				return $false;
			}else{
				return $lista;
			}
		}


		function eliminarMiembro(){
			$cedulaMiembro = $_POST['cedulaMiembro'];
			
			$dataMiembro = new dataMiembro;
			
			if($dataMiembro->eliminarMiembro($cedulaMiembro)==true){		
				echo "Registro eliminado correctamente<br>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}
		
		function modificarMiembro(){
			$cedula = str_replace(" ", "", $_POST['cedulaMiembro']);
			
			$nombre = $_POST['nombre'];
			$apellido  = $_POST['apellidos'];

			$calendario = $_POST['edad'];
		 	$date = date_create($calendario);
		 	$edad = date_format($date, 'Y-m-d');

		 	$procedencia= $_POST['procedencia'];

			$telefono = str_replace(" ", "", $_POST['telefono']);
			
			$estadoCivil = $_POST['estadoCivil'];
			$nivelTeologico = $_POST['nivelTeologico'];
			$clasificacion = $_POST['clasificacion'];
			$tipo = $_POST['tipo'];

			$idCelula = $_POST['idCelula'];

			$miembro = new Miembro($cedula, $nombre, $apellido, $edad, $procedencia, $telefono, $estadoCivil, $nivelTeologico, $clasificacion, $tipo, $idCelula);
			$dataMiembro = new dataMiembro();

			if($dataMiembro->modificarMiembro($miembro, $cedula)==true){
				echo "Registro modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar</p><br>";
			}
		}
	}
	if(isset($_POST['accion'])){
		$accion = $_POST['accion'];
		$control = new controladoraMiembro;
		
		if($accion == 'insertar'){
			$control->insertarMiembro();
		}
		if($accion== 'eliminar'){
			$control->eliminarMiembro();
		}
		if($accion=='modificar'){
			$control->modificarMiembro();
		}
	}
	if(isset($_GET['op'])){
		$accion = $_GET['op'];
		
		$control = new controladoraMiembro;
		
		if($accion == 1){
			$control->insertarMiembro();
		}
	}
?>