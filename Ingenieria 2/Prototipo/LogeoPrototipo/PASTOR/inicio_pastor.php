<?php
	$conex =mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor");
	mysql_select_db("bodega",$conex);
		
	session_start();
	
	if(!$_SESSION){
		header("location:index.php");
	}
	if($_SESSION){
		$id = $_SESSION['id_usuario'];
		
		if($id == 2){
			header("location: ../TESORERO/inicio_tesorero.php");
		}
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pastor</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
        <script type="text/javascript" src="../JS/pastor.js"></script>
    </head>

    <body class="body">
        <div class="container">
            <header class="header">
                <div class="encabezado">
                    <div class="left">
                        <a href="../PASTOR/inicio_pastor.php"><img src="../IMAGENES/metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;"/></a>
                    </div>
                    <div class="right">
                        <h1>Iglesia Metodista</h1>
                        <h1>Manantiales de Vida</h1>
                    </div>
                </div>
            </header>
            <div class="sidebar1" id="menu">
                <ul>
                    <li class="has-sub"><a href="../PASTOR/inicio_pastor.php">Inicio</a>
                    <li class="has-sub"><a href="">Miembros</a>
                        <ul>
                            <li class="has-sub"><a href="#" onclick="añadirMiembro()">Añadir Miembro</a></li>
                            <li class="has-sub"><a href="#" onclick="modificarMiembro()">Modificar Miembro</a></li>
                            <li class="has-sub"><a href="#" onclick="eliminarMiembro()">Eliminar Miembro</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="">Celulas</a>
                        <ul>
                            <li class="has-sub"><a href="#" onclick="crearCelula()">Crear Celula</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="">Inventario</a>
                        <ul>
                            <li class="has-sub"><a href="#" onclick="añadirInventario()">Anadir</a></li>
                            <li class="has-sub"><a href="#" onclick="modificarInventario()">Modificar</a></li>
                            <li class="has-sub"><a href="#" onclick="eliminarInventario()">Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="../PASTOR/consultar_pastor.jsp">Consultas</a></li>
					<li class="has-sub"><a href="../SESION/cerrar_sesion.php">Salir</a></li>
                </ul>
            </div>

            <article class="content" id="capa">
            </article>
            <footer>
                <p></p>
            </footer>
        </div>
    </body>
</html>