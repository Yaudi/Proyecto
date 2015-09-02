<?php
	$conex =mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor");
	mysql_select_db("bodega",$conex);
		
	session_start();
	
	if(!$_SESSION){
		header("location:index.php");
	}
	if($_SESSION){
		$id = $_SESSION['id_usuario'];
		
		if($id == 1){
			header("location: ../PASTOR/inicio_pastor.php");
		}
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tesorero</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
        <script type="text/javascript" src="../JS/tesorero.js"></script>
    </head>

    <body class="body">
        <div class="container">
            <header class="header">
                <div class="encabezado">
                    <div class="left">
                        <a href="../TESORERO/inicio_tesorero.php"><img src="../IMAGENES/metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
                    </div>
                    <div class="right">
                        <h1>Iglesia Metodista</h1>
                        <h1>Manantiales de Vida</h1>
                    </div>
                </div>
            </header>
            <div class="sidebar1" id="menu">
                <ul>
                    <li class="has-sub"><a href="../TESORERO/inicio_tesorero.php">Inicio</a>
                    <li class="has-sub"><a href="#" onclick="entrada()">Entradas</a></li>
                    <li class="has-sub"><a href="#" onclick="salida()">Salidas</a></li>
                    <li class="has-sub"><a href="#" onclick="cierre()">Cierre</a></li>
                    <li class="has-sub"><a href="#" onclick="presupuesto()">Presupuesto</a></li>
                    <li class="has-sub"><a href="#">Consultas</a></li>
					<li class="has-sub"><a href="../SESION/cerrar_sesion.php">Salir</a></li>
                </ul>
            </div>

            <article class="capa" id="capa">
            </article>
            <footer>
                <p></p>
            </footer>
        </div>
    </body>
</html>