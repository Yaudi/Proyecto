<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
    </head>
    <body>
        <h1>Miembros</h1>
        <div>
            <?php
                include ("../../Controladora/Miembro/controladoraMiembro.php");
                $control = new controladoraMiembro;
                
                $lista =$control->obtenerMiembros();
            ?>
            <table border="1px" style="background-color: white; text-align: center">
                <thead>
                    <tr>
                        <th><p>C&eacute;dula</p></th>                      
                        <th><p>Nombre</p></th>
                        <th><p>Apellidos</p></th>
                        <th><p>Eliminar</p></th>
                        <th><p>Modificar</p></th>
                   </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($lista as $miembro){
                        echo "<td>".$miembro->getCedulaMiembro()."</td>";
                        echo "<td>".$miembro->getNombreMiembro()."</td>";
                        echo "<td>".$miembro->getApellidosMiembro()."</td>";
                        echo "<td><input class=\"botonTablas\" type=\"button\" value=\"Eliminar\" onclick=\"eliminarMiembro('".$miembro->getCedulaMiembro()."')\"/></td>";
                        echo "<td><input class=\"botonTablas\" type=\"button\" value=\"Modificar\" onclick=\"modificarMiembroConsulta('".$miembro->getCedulaMiembro()."')\"/></td>";
                    echo "</tr>";
                    }
                ?>
                </tbody>                            
            </table>
        </div>
        <script lang="text/Javascript" src="../../JS/ajaxMiembro.js" ></script>
    </body>
</html>