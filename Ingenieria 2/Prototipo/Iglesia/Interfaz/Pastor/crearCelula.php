<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
        
        <script lang="JavaScript" src="../../JS/jQuery.js" ></script><!-- Funciones -->
        <script src="../../JS/jquery.validate.min.js"></script>
    </head>
    <body>
        <h1>Crear Celula</h1>
        <form id="formularioCelula" method="POST">
            <table width="200" border="0" style="text-align: center">
                <tbody>
                    <tr>
                        <td><input class="texto" type="text" name="nombreCelula" id="nombreCelula" placeholder="Nombre"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" name="ubicacionCelula" id="ubicacionCelula" placeholder="Ubicacion"></td>
                    </tr>
                    <tr>
                        <td><input class="boton" type="submit" value="Guardar" ></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <script lang="JavaScript" src="../../js/ajaxCelula.js" ></script>
    </body>
</html>