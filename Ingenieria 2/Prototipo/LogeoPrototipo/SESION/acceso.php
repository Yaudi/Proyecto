<?php
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	if(isset($usuario)){
		include ("../Data/DBConexion.php");
		$con = new DBConexion;
		
		if($con->conectar()==true){
			
			session_start();
			
			$consulta = ("SELECT * FROM tblogeo WHERE user='$usuario' AND pass='$password'"); 
			$resultado = mysql_query($consulta) or die (mysql_error());
			$fila = mysql_fetch_array($resultado);
			
			if(!$fila['id']){
				header("location: ../index.php");
			}else{
				if($fila['id'] == 1){
					$_SESSION['id_usuario'] = $fila['id'];
					$_SESSION['nombre'] = $fila['user'];
					
					header("Location: ../PASTOR/inicio_pastor.php");
				}else if($fila['id'] == 2){
					$_SESSION['id_usuario'] = $fila['id'];
					$_SESSION['nombre'] = $fila['user'];
					
					header("location: ../TESORERO/inicio_tesorero.php");
				}
			}
		}
	}else{
		header("location: ../index.php");
	}
?>