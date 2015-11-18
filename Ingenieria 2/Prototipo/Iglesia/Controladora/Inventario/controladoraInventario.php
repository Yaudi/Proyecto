<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	
	include ("../../Data/dataInventario.php");
	include ("../../Dominio/Inventario.php");
	include ("../../Data/DBConexion.php");

	class controladoraInventario {
		
		function controladoraInventario(){}
	
		function insertarInventario(){
			if(isset($_POST['nombreInventario']) && isset($_POST['modeloInventario'])){
				$nombreInventario = $_POST['nombreInventario'];
				$modeloInventario  = $_POST['modeloInventario'];
				$marcaInventario  = $_POST['marcaInventario'];
				$estadoInventario  = $_POST['estadoInventario'];
				$cantidadInventario  = $_POST['cantidadInventario'];
				$descripcionInventario  = $_POST['descripcionInventario'];
				$serieInventario  = $_POST['serieInventario'];
				
				$inventario = new Inventario($nombreInventario, $modeloInventario, $marcaInventario, $estadoInventario, $cantidadInventario, $descripcionInventario, $serieInventario);			
				$dtInventario = new dataInventario;

				if($dtInventario->insertarInventario($inventario)==true){		
					exit('Insertado correctamente');
				}else{
					echo "</p>Error al Insertar ".$nombreInventario." al Inventario</p><br>";
				}
			}else{
				echo "Datos Requeridos";
			}
		}
		function obtenerInventarios(){
			$dtInventario = new dataInventario;
			$lista =$dtInventario->getInventarios();
			if(!$lista){
				return $false;
			}else{
				return $lista;
			}
		}

		function obtenerInventario($serieInventario){
			$dtInventario = new dataInventario;
			$inventario =$dtInventario->getInventario($serieInventario);
			if(!$inventario){
				return false;
			}else{
				return $inventario;
			}
		}

		function eliminarInventario(){
			$serieInventario = $_POST['serieInventario'];
			
			$dtInventario = new dataInventario;
			
			if($dtInventario->eliminarInventario($serieInventario)==true){		
				echo "Registro borrado correctamente<br>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}

		function modificarInventario(){
			$nombreInventario = $_POST['nombreInventario'];
			$modeloInventario  = $_POST['modeloInventario'];
			$marcaInventario  = $_POST['marcaInventario'];
			$estadoInventario  = $_POST['estadoInventario'];
			$cantidadInventario  = $_POST['cantidadInventario'];
			$descripcionInventario  = $_POST['descripcionInventario'];
			$serieInventario  = $_POST['serieInventario'];
			
			$inventario = new Inventario($nombreInventario, $modeloInventario, $marcaInventario, $estadoInventario, $cantidadInventario, $descripcionInventario, $serieInventario);			
			$dtInventario = new dataInventario;

			if($dtInventario->modificarInventario($inventario, $serieInventario)==true){
				echo "Registro modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar</p><br>";
			}
		}
	}
	if(isset($_POST['accion'])){
		$accion = $_POST['accion'];
		$control = new controladoraInventario;
		
		if($accion=="insertar"){
			$control->insertarInventario();
		}
		if($accion=="modificar"){
			$control->modificarInventario();
		}
		if($accion== 'eliminar'){
			$control->eliminarInventario();
		}
	}
?>