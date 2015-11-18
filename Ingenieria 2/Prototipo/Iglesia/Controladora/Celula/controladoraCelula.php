<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	
	include ("../../Data/dataCelula.php");
	include ("../../Dominio/Celula.php");
	include ("../../Data/DBConexion.php");

	class controladoraCelula {
		
		function controladoraCelula(){}
	
		function crearCelula(){
			if(isset($_POST['nombreCelula']) && isset($_POST['ubicacionCelula'])){
				$nombreCelula = $_POST['nombreCelula'];
				$ubicacionCelula  = $_POST['ubicacionCelula'];
				
				$celula = new Celula(0, $nombreCelula, $ubicacionCelula);			
				$dtCelula = new dataCelula;

				if($dtCelula->crearCelula($celula)==true){		
					exit('Creado correctamente');
				}else{
					echo "</p>Error al Crear la Celula ".$nombreCelula."</p><br>";
				}
			}else{
				echo "Datos Requeridos";
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
	}
	if(isset($_POST['accion'])){
		$op = $_POST['accion'];
		$control = new controladoraCelula;
		
		if($op=="insertar"){
			$control->crearCelula();
		}
	}
?>