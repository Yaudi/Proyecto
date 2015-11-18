<?php
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	if(isset($usuario)){
		include ("../Data/DBConexion.php");
		$con = new DBConexion;
		
		if($con->conectar()==true){
			
			session_start();
			
			$consulta = ("SELECT * FROM tblogueo WHERE usuario='$usuario' AND contrasena='$password'"); 
			$resultado = mysql_query($consulta) or die (mysql_error());
			$fila = mysql_fetch_array($resultado);
			
			if(!$fila['id']){
				header("location: ../index.php");
			}else{
				if($fila['id'] == 1){
					$_SESSION['idUsuario'] = $fila['id'];
					$_SESSION['nombre'] = $fila['usuario'];
					
					header("Location: ../Interfaz/Pastor/inicioPastor.php");
				}else if($fila['id'] == 2){
					$_SESSION['idUsuario'] = $fila['id'];
					$_SESSION['nombre'] = $fila['usuario'];
					
					header("location: ../Interfaz/Tesorero/inicioTesorero.php");
				}
			}
		}
	}else{
		header("location: ../index.php");
	}
?>