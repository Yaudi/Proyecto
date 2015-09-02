<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/Formularios.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body id="capa">
        <h1>Añadir Miembro</h1>
        <form>
            <table width="400" border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Cedula"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Nombre"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Apellidos"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Edad"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Lugar de Procedencia"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Telefono"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Estado Civil"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Nivel Teologico"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Clasificacion"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" placeholder="Tipo"></td>
                    </tr>
                    <tr>
                        <td>
                            <select class="select">
                                <option>Celula</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="boton" type="submit">Guardar</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
