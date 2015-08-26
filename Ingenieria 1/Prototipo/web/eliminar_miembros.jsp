<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="pastor.js"></script>
    </head>
    <body>
        <h1>Eliminar Miembros</h1>
        <table>
            <tr>
                <td>Cedula o Nombre</td>
            </tr>
            <tr>
                <td><input type="text" name="buscar"></td>
            </tr>
            <tr>
                <td><input type="button" onclick="tabla()" value="Buscar"></td>
            </tr>
        </table>
        <div id="capa2">
        </div>
    </body>
</html>
