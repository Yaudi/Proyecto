<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="tesorero.js"></script>
    </head>
    <body>
        <div id="capa2">
            <h1 class="titulo">Consultar por Tipo</h1>
            <table class="tabla" width="400" border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><label>Tipo</label></td>
                        <td>
                            <select>
                                <option>Diesmo</option>
                                <option>Ofrenda</option>
                                <option>Venta</option>
                                <option>Donacion</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" onclick="consultarTipoResultado()">Consultar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
