<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="pastor.js"></script>
    </head>
    <body>
        <h1>Modificar Miembro de Celula</h1>
        <table width="400" border="0">
            <tbody>
                <tr>
                    <td><label>Celula</label></td>
                    <td>
                        <select>
                            <option>ID</option>
                        </select>
                    </td>
                </tr>
                <tr>
                  <td><label>Cedula o Nombre</label></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Buscar" onclick="formularioModificarMiembro()"></td>
                </tr>
            </tbody>
        </table>
        <div id="capa2">
        </div>
    </body>
</html>
