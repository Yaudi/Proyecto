<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="../JS/pastor.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
    </head>
    <body>
        <h1>Eliminar Miembros</h1>
        <table cellspacing="1" style="background-color: white; text-align: center">
            <tr>
                <td><input class="texto" type="text" name="buscar" placeholder="Cedula o Nombre"></td>
            </tr>
            <tr>
                <td><input class="boton" type="button" onclick="tabla()" value="Buscar"></td>
            </tr>
        </table>
        <div id="capa2">
        </div>
    </body>
</html>
