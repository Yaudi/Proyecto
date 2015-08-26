<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="pastor.js"></script>
    </head>
    <body>
        <h1>Crear Celula</h1>
        <form>
            <table width="200" border="0">
                <tbody>
                    <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><label>Ubicacion</label></td>
                        <td><input type="text"></td>
                    </tr>
                </tbody>
            </table>
            <input type="button" value="Anadir Miembros" onclick="agregarMiembroCelula()">
            <div id="capa2">
            </div>
            <input type="button" value="Guardar">
        </form>
    </body>
</html>
