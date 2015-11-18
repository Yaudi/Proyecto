<?php
header('Content-Type: text/html; charset=ISO-8859-1');		
	session_start();
	
	if(!$_SESSION){
		header("location:index.php");
	}
	if($_SESSION){
		$id = $_SESSION['idUsuario'];
		
		if($id == 2){
			header("location: ../Tesorero/inicioTesorero.php");
		}
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pastor</title>
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
        
        <script lang="JavaScript" src="../../JS/jQuery.js" ></script><!-- Funciones -->

        <script type="text/javascript" src="../../JS/jquery-ui.js"></script><!-- Magia para la mascaras de teléfono etc-->
        <script type="text/javascript" src="../../JS/maskedinput.js"></script><!-- Magia para la mascaras de teléfono etc-->

        <script type="text/javascript" src="../../JS/timePicker/jquery.ui.timepicker.js"></script><!-- Magia para la fecha y hora-->
        <link rel="stylesheet" type="text/css"  href="../../JS/timePicker/jquery.ui.timepicker.css"><!-- Magia para la hora-->
        <link rel="stylesheet" type="text/css" href="../../CSS/jquery-ui.css"><!-- Magia para la fecha-->

        <script type="text/javascript" src="../../JS/jquery.maskMoney.js"></script><!-- Magia para la moneda -->
        <script src="../../JS/jquery.validate.min.js"></script>

        <script lang="text/Javascript" src="../../JS/ajaxMiembro.js" ></script>
        <script type="text/javascript" src="../../JS/ajaxCelula.js"></script>
        <script lang="text/Javascript" src="../../JS/ajaxInventario.js" ></script>
    </head>

    <body class="body">
        <div class="container">
            <header class="header">
                <div class="encabezado">
                    <div class="left">
                        <a href="../../Interfaz/Pastor/inicioPastor.php"><img src="../../IMAGENES/metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;"/></a>
                    </div>
                    <div class="right">
                        <h1>Iglesia Metodista</h1>
                        <h1>Manantiales de Vida</h1>
                    </div>
                </div>
            </header>
            <div class="sidebar1" id="menu">
                <ul>
                    <li class="has-sub"><a href="../../Interfaz/Pastor/inicioPastor.php">Inicio</a>
                    <li class="has-sub"><a href="">Miembros</a>
                        <ul>
                            <li class="has-sub"><a href="#" onclick="cargarPagina('insertarMiembros.php')">A&ntilde;adir Miembro</a></li>
                            <li class="has-sub"><a href="#" onclick="cargarPagina('opcionesMiembros.php')">Eliminar/Modificar Miembro</a></li>
                           <?php // <li class="has-sub"><a href="#" onclick="eliminarMiembro()">Eliminar Miembro</a></li>?>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="">Celulas</a>
                        <ul>
                            <li class="has-sub"><a href="#" onclick="cargarPagina('crearCelula.php')">Crear Celula</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="">Inventario</a>
                        <ul>
                            <li class="has-sub"><a href="#" onclick="cargarPagina('insertarInventario.php')">A&ntilde;adir</a></li>
                            <li class="has-sub"><a href="#" onclick="cargarPaginaOperaciones('opcionesInventario.php')">Modificar/Eliminar</a></li>
                           <?php // <li class="has-sub"><a href="#" onclick="eliminarInventario()">Eliminar</a></li> ?>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="../../Interfaz/Pastor/consultarPastor.php">Consultas</a></li>
					<li class="has-sub"><a href="../../Sesion/cerrarSesion.php">Salir</a></li>
                </ul>
            </div>
            <article id="capaTabla"></article>
            <article class="content" id="capa">
            </article>
            <footer>
                <p></p>
            </footer>
        </div>
    </body>
</html>