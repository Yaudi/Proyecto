<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="../JS/pastor.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
    </head>
    <body>
        <div id="capa2">
            <br>
            <table class="tabla">
            <tr>
                <td>Consultar por:</td>
            </tr>
            <tr>
                <td>
                    <select class="select">
                        <option>Todo</option>
                        <option>Clasificacion</option>
                        <option>Tipo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="boton" type="button" value="Consultar" onclick="consultarMiembroCelula()">
                </td>
            </tr>
        </table>
        </div>
    </body>
</html>
