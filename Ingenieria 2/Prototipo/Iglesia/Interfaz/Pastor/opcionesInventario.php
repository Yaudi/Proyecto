<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
    </head>
    <body>
        <h1>Inventario</h1>
        <div>
            <?php
                include ("../../Controladora/Inventario/controladoraInventario.php");
                $control = new controladoraInventario;
                
                $lista =$control->obtenerInventarios();
            ?>
            <table border="1px" style="background-color: white; text-align: center" cellspacing="1">
                <thead>
                    <tr>
                      <th><p>Serie</p></th>
                      <th><p>Nombre</p></th>                      
                      <th><p>Modelo</p></th>
                      <th><p>Marca</p></th>
                      <th><p>Estado</p></th>
                      <th><p>Cantidad</p></th>
                      <th><p>Descripcion</p></th>
                      <th><p>Eliminar</p></th>
                      <th><p>Modificar</p></th>
                   </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($lista as $inventario){
                            echo "<td>".$inventario->getSerieInventario()."</td>";
                            echo "<td>".$inventario->getNombreInventario()."</td>";
                            echo "<td>".$inventario->getModeloInventario()."</td>";
                            echo "<td>".$inventario->getMarcaInventario()."</td>";
                            echo "<td>".$inventario->getEstadoInventario()."</td>";
                            echo "<td>".$inventario->getCantidadInventario()."</td>";
                            echo "<td>".$inventario->getDescripcionInventario()."</td>";
                            echo "<td><input class=\"botonTablas\" type=\"button\" value=\"Eliminar\" onclick=\"eliminarInventario('".$inventario->getSerieInventario()."')\"/></td>";
                            echo "<td><input class=\"botonTablas\" type=\"button\" value=\"Modificar\" onclick=\"modificarInventarioConsulta('".$inventario->getSerieInventario()."')\"/></td>";
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
