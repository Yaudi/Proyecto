<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>

        <script lang="JavaScript" src="../../JS/jQuery.js" ></script><!-- Funciones -->

        <script type="text/javascript" src="../../JS/jquery-ui.js"></script><!-- Magia para la mascaras de teléfono etc-->
        <script type="text/javascript" src="../../JS/maskedinput.js"></script><!-- Magia para la mascaras de teléfono etc-->

        <script type="text/javascript" src="../../JS/timePicker/jquery.ui.timepicker.js"></script><!-- Magia para la fecha y hora-->
        <link rel="stylesheet" type="text/css"  href="../../JS/timePicker/jquery.ui.timepicker.css"><!-- Magia para la hora-->
        <link rel="stylesheet" type="text/css" href="../../CSS/jquery-ui.css"><!-- Magia para la fecha-->

        <script type="text/javascript" src="../../JS/jquery.maskMoney.js"></script><!-- Magia para la moneda -->
        <script src="../../JS/jquery.validate.min.js"></script>
        <?php
            include ("../../Controladora/Celula/controladoraCelula.php");
            $control = new controladoraCelula;
            $lista = $control->obtenerCelulas();
        ?>
    </head>
    <body id="capa">
        <h1>A&ntilde;adir Miembro</h1>
        <form id="formularioMiembro" method="POST">
            <table border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><input class="texto" type="text" id="cedula" name="cedula" placeholder="Cedula"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="nombre" name="nombre" placeholder="Nombre"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="apellido" name="apellido" placeholder="Apellidos"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="edad" name="edad" placeholder="Fecha de Nacimiento"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="procedencia" name="procedencia" placeholder="Lugar de Procedencia"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="telefono" name="telefono" placeholder="Telefono"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="estadoCivil" name="estadoCivil" placeholder="Estado Civil"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="nivelTeologico" name="nivelTeologico" placeholder="Nivel Teologico"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="clasificacion" name="clasificacion" placeholder="Clasificacion"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" type="text" id="tipo" name="tipo" placeholder="Tipo"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="todo">
                                <div class="select">
                                    <select name="idCelula" id="idCelula">
                                        <?php 
                                        foreach ($lista as $celula){
                                            echo "<option value=\"".$celula->getIdCelula()."\">".$celula->getNombreCelula()."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="boton" type="submit" value="Guardar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php
        //<div id="contenedor"></div>
        ?>
        <script lang="text/Javascript" src="../../JS/ajaxMiembro.js" ></script>
    </body>
</html>