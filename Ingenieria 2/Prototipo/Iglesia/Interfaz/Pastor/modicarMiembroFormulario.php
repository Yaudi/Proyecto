<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
    </head>
    <body id="capa">
        <?php
            include ("../../controladora/Miembro/controladoraMiembro.php");
            $controlMiembro = new controladoraMiembro;
            $idMiembro = $_POST['idMiembro'];
            $miembro =$controlMiembro->obtenerMiembro($idMiembro);
            $lista = $controlMiembro->obtenerCelulas();
        ?> 
        <h1>Modificar Miembro</h1>
        <form id="modificarMiembro" method="POST">
            <table border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"cedula\" name=\"cedula\" value=\"".$miembro->getCedulaMiembro()."\" disabled=\"disabled\"/>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"hidden\" id=\"cedulaMiembro\" name=\"cedulaMiembro\" value=\"".$miembro->getCedulaMiembro()."\" />";
                                echo "<input class=\"texto\" type=\"text\" id=\"nombre\" name=\"nombre\"  value=\"".$miembro->getNombreMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"apellidos\" name=\"apellidos\"  value=\"".$miembro->getApellidosMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                $calendario = $miembro->getAnioNacimientoMiembro();
                                $date = date_create($calendario);
                                $edad = date_format($date, "m/d/Y");

                                //$date=date_create("2013-03-15");
                                //echo date_format($date,"d/m/Y");
                                echo "<input class=\"texto\" type=\"text\" id=\"edad\" name=\"edad\"  value=\"".$edad."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"procedencia\" name=\"procedencia\"  value=\"".$miembro->getProcedenciaMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"telefono\" name=\"telefono\"  value=\"".$miembro->getTelefonoMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"estadoCivil\" name=\"estadoCivil\"  value=\"".$miembro->getEstadoCivilMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"nivelTeologico\" name=\"nivelTeologico\"  value=\"".$miembro->getNivelTeologicoMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"clasificacion\" name=\"clasificacion\"  value=\"".$miembro->getClasificacionMiembro()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"tipo\" name=\"tipo\"  value=\"".$miembro->getTipoMiembro()."\" />";
                            ?>
                        </td>
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
                        <td><input class="boton" type="submit" value="Modificar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <script lang="text/Javascript" src="../../JS/ajaxMiembro.js" ></script>
    </body>
</html>