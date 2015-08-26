<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body id="capa">
        <h1>Entradas</h1>
        <table width="400" border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><label>Monto</label></td>
                        <td><input type="text"></td>
                    </tr>
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
                        <td><button type="submit">Guardar</button></td>
                    </tr>
                </tbody>
            </table>
    </body>
</html>
