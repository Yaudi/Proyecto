<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script type="text/javascript" src="../JS/pastor.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
        <style type="text/css">
        .button{
    width: 50px;
    height: 50px;
    margin: 20px 20px;
    background: #02064F;
    color: white;
    border: none;
}

.boton:hover{
    background: #040B8A;
}
</style>
    </head>
    <body>
        <h1>Modificar Inventario</h1>
        <div id="capa2">
            <table width="500" height="" border="1" cellspacing="1">
                <tbody>
                    <tr>
                      <td>Nombre</td>
                      <td>Modelo</td>
                      <td>Marca</td>
                      <td>Estado</td>
                      <td>Cantidad</td>
                      <td>Descripcion</td>
                      <td>Serie</td>
                      <td>Opcion</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input class="button" type="button" value="Modificar" onclick="modificarInventarioFormulario()"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
