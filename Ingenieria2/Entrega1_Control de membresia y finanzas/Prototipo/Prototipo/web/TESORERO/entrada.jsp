<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
    </head>
    <body id="capa">
        <h1>Entradas</h1>
        <table width="400" border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Monto"></td>
                    </tr>
                    <tr>
                        <td><label>Tipo</label></td>
                    </tr>
                    <tr>
                        
                        <td>
                            <select class="select">
                                <option>Diesmo</option>
                                <option>Ofrenda</option>
                                <option>Venta</option>
                                <option>Donacion</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="boton" type="submit">Guardar</button></td>
                    </tr>
                </tbody>
            </table>
    </body>
</html>
