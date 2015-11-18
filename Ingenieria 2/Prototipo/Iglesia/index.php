<?php
	include ("Data/DBConexion.php");
		
	session_start();
	
	if($_SESSION){
		$id = $_SESSION['id_usuario'];
		
		if($id == 1){
			header("location: Interfaz/Pastor/inicioPastor.php");
		}else if($id == 2){
			header("location: Interfaz/Tesorero/inicioTesorero.php");
		}
	}else{?>
		<html>
			<head>
				<title>Login</title>
				<link rel="stylesheet" type="text/css" href="CSS/Formularios.css" />
				<link rel="stylesheet" type="text/css" href="CSS/Logeo.css" />
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			</head>
			<body>
				<div class="container">
					<header class="header">
						<div class="encabezado">
							<div class="left">
								<a href="#"><img src="Imagenes/metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
							</div>
							<div class="rigth">
								<h1>Iglesia Metodista</h1>
								<h1>Manantiales de Vida</h1>
							</div>
						</div>
					</header>
					<article class="content">
						<section>
							<table width="558" height="90" border="0" align="center" style="background-color: white; text-align: center">
								<tr>
									<td>
										<div style="margin: 40px auto">
											<form action="Sesion/acceso.php" method="post">
												<input class="texto" type="text" name="usuario" placeholder="Usuario"><br><br/>
												<input class="texto" type="password" name="password" placeholder="Contraseña"><br><br/>

												<input class="boton" type="submit" name="submit" value="Continuar">
											</form>
										</div>
									</td>
								</tr>
							</table>
						</section>
					</article>
				</div>
			</body>
		</html>
	<?php	
	}
?>