<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="pastor.js"></script>
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
                    <select>
                        <option>Todo</option>
                        <option>Nivel Teologico</option>
                        <option>Clasificacion</option>
                        <option>Tipo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="Consultar" onclick="consultarMiembros()">
                </td>
            </tr>
        </table>
        </div>
    </body>
</html>
