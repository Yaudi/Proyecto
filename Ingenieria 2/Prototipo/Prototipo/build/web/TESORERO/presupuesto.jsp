<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="../JS/tesorero.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
    </head>
    <body>
        <h1>Presupuesto</h1>
        <table width="400" border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><label>Tipo</label></td>
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
                        <td><button class="boton" type="submit" onclick="presupuestoResultado()">Presupuestar</button></td>
                    </tr>
                </tbody>
            </table>
        <div id="capa2">
            
        </div>
    </body>
</html>
